<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DetailController extends Controller
{
    public function index($id)
    {
        // $data = Product::findorFail($id);
        $data = Product::singleProduct($id)->withPrices()->get()->first();

        // return view('pages.testing.detailspage', compact('data'));
        return view('pages.default.detailspage', compact('data'));
    }
}
