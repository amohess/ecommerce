<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // $product_data = Product::all();
        $cart_data = $user->products()->withPrices()->get();
        $cart_data->calculateSubtotal();

        // dd($cart_data);

        return view('pages.default.cartpage', compact('cart_data'));
        // return view('pages.testing.cartpage', compact('cart_data'));
    }
}
