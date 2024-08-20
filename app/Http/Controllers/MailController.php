<?php

namespace App\Http\Controllers;

use App\Mail\OrderSuccessMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $user = Auth()->user();

        // All information that is passed to the mail
        $name = $user->name;
        $message_body = 'Your order has been successfully completed.';
        $products = $user->products;
        // $orders = $user->orders;

        // Mail::to($request->user())->send(new OrderShipped($order));

        Mail::to($user->email)->send(new OrderSuccessMail($name, $message_body, $products));

        return (new OrderSuccessMail($name, $message_body, $products))->render();
    }
}
