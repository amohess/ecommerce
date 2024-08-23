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

    public function showProduct($id)
    {
        $product = Product::find($id);
        $category = $product->category;

        // Fetch up to 4 other products with the same category, excluding the current product
        $relatedProducts = Product::where('category', $category)
            ->where('id', '!=', $id)
            ->limit(4)
            ->get();

        // Fetch all categories
        $categories = Product::distinct()->pluck('category');

        return view('product.show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'categories' => $categories,
        ]);
    }
}
