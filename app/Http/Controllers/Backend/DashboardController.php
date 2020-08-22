<?php

namespace App\Http\Controllers\Backend;

use App\Models\Area;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\UserType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showAll(){

    	return view('backend.dashboard');
    }

    public function showDashboard(){

        $user = auth()->user();
    	$categories = Category::all();
        $products = Product::with('category','supplier')->get();

        $suppliers = User::where('user_type_id', 2)->where('status', 1)->get();
        $distributors = User::where('user_type_id', 3)->where('status', 1)->get();
        $categoryList = Category::where('status', 1)->get();

        $users = User::all();
        $userTypes = UserType::where('status', 1)->get();
        $areas = Area::where('status', 1)->get();

        if ($user->user_type_id == 1) {
            $orders = Order::with('customer','distributor','products')->where('status', '!=', 0)->get();
        }elseif($user->user_type_id == 3){
            $orders = Order::with('customer','distributor','products')->where('distributor_id', $user->id)->orWhere('customer_id', $user->id)->where('status', '!=', 0)->get();
        }elseif($user->user_type_id == 4){
            $orders = Order::with('customer','distributor','products')->where('customer_id', $user->id)->get();
        }

        return view('backend.mainDashboard', compact('categories','products','suppliers','categoryList','users','userTypes','areas','orders','distributors'));
    }
}
