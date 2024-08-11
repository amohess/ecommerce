<?php

namespace App\Http\Controllers;

use App\Helpers\ShippingHelper;
use App\Helpers\StripeCheckout;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CheckoutPaymentController extends Controller
{
    public function index()
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

        // if ($cart_data->isNotEmpty()) {
        //     dd('Cart is NOT empty');
        // }
    }
}
