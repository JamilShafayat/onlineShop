<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function showList()
    {
        return view('frontend.productList');
    }

    public function showDetails($id)
    {
        $product = Product::findOrFail($id);

        return view('frontend.productDetails', compact('product'));
    }
}
