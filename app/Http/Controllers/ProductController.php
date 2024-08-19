<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\products\ProductFilter;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $values = $request->query();

        // $product_data = Product::all();
        $product_data = Product::withPrices()->get();
        $product_data = ProductFilter::withPrices()->filter($values)->get();
        $category_data = Product::distinct('category')->pluck('category');

        return view('pages.default.productspage', compact('product_data', 'category_data'));
        // return view('pages.testing.productspage', compact('product_data'));
    }
}
