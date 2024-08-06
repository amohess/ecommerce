<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        // $product_data = Product::all();
        $product_data = Product::withPrice()->get();

        // return view('pages.default.cartpage', compact('product_data'));
        return view('pages.testing.cartpage', compact('product_data'));
    }
}
