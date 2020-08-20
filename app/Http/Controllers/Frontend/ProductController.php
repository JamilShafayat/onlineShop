<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showList()
    {
        return view('frontend.productList');
    }

    public function showDetails()
    {
        return view('frontend.productDetails');
    }
}
