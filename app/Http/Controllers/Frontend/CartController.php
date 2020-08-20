<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        return view('frontend.shopingCart');
    }

    public function showCheckout()
    {
        return view('frontend.checkout');
    }

    public function processCheckout(Request $request)
    {
        # code...
    }
}
