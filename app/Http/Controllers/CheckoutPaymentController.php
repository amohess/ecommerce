<?php

namespace App\Http\Controllers;

use App\Helpers\ShippingHelper;
use App\Helpers\StripeCheckout;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CheckoutPaymentController extends Controller
{
    // custom script to generate random and unique number
    public function generateUniqueOrderNo()
    {
        $orderNo = 'ORD-2024-'.Str::upper(Str::random(6));

        // Check if the generated order number already exists in the database
        while (DB::table('orders')->where('order_no', $orderNo)->exists()) {
            // And regenerate if it does exist
            $orderNo = 'ORD-2024-'.Str::upper(Str::random(6));
        }

        return $orderNo;
    }

    public function index($payment)
    {
        // get the logged in user
        $user = Auth::user();

        $shipping_helper = new ShippingHelper();
        $stripe_checkout = new StripeCheckout();
        $order = new Order();
        $insert_data = [];
        $completed = false;

        // getting the products the user added to the cart
        $cart_data = $user->products()->withPrices()->get(); // ignore undefined method error for products

        $cart_data->calculateSubtotal();

        if ($cart_data->isEmpty()) {
            dd('Cart is empty');
        }

        // determining if stripe payment or default payment is being used
        switch ($payment) {
            case 'stripe':
                $stripe_checkout->startCheckoutSession(); // Prepares the stripe checkout page.
                $stripe_checkout->addEmail($user->email); // Automatically gets the user's email.
                $stripe_checkout->addProducts($cart_data); // Identifies what products are shown on the page.
                $stripe_checkout->enablePromoCodes(); // Adds promo codes.
                $shipping_data = $shipping_helper->getGroupShippingOptions(); // References the available shipping options.
                $stripe_checkout->addShippingOptions($shipping_data); // Populate the identified options.
                $stripe_checkout->createSession();
                $insert_data = $stripe_checkout->getOrderCreateData();
                $completed = true;

                break;

            default:
                $insert_data = [
                    'payment_provider' => 'testing',
                    'payment_id' => 'testing',
                ];
                $completed = true;
                break;
        }

        // check if payment was completed and $insert_data is not empty
        if (!$completed && empty($insert_data)) {
            dd('Payment incomplete or checkout data is missing.');
        }

        // inserts values into the order table
        $order->user_id = $user->id;
        // $order->order_no = 'ORD-2024-'.Str::RANDOM(6);
        $order->order_no = $this->generateUniqueOrderNo();
        $order->subtotal = $cart_data->getSubtotal();
        $order->total = $cart_data->getTotal();
        $order->payment_provider = $insert_data['payment_provider'];
        $order->payment_id = $insert_data['payment_id'];
        $order->shipping_id = 1;
        $order->shipping_address_id = 1;
        $order->billing_address_id = 1;
        $order->payment_status = 'unpaid';
        $order->save();

        // for each record in the cart, create an orderProduct table with related variables
        $records = [];
        foreach ($cart_data as $data) {
            array_push($records,
                new OrderProduct([
                    'product_id' => $data->id,
                    'user_id' => $user->id,
                    'price' => $data->getPrice(),
                    'quantity' => $data->pivot->quantity,
                ]));
        }

        $order->order_products()->saveMany($records);

        if ($payment == 'stripe') {
            return redirect($stripe_checkout->getUrl());
        }
        dd('Payment Successful during test');
    }
}
