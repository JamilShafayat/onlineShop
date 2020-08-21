<?php

namespace App\Http\Controllers\Backend;

use App\Models\Area;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\UserType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function showDashboard(){

    	return view('backend.dashboard');
    }

    public function showAll(){

    	$categories = Category::all();
        $products = Product::with('category','supplier')->get();

        $suppliers = User::where('user_type_id', 2)->where('status', 1)->get();
        $categoryList = Category::where('status', 1)->get();

        $users = User::all();
        $userTypes = UserType::where('status', 1)->get();
        $areas = Area::where('status', 1)->get();

        return view('backend.category.categories', compact('categories','products','suppliers','categoryList','users','userTypes','areas'));
    }
}
