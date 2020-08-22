<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Product;
use App\Models\UserType;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showHome()
    {
        $products = Product::where('status',1)->where('quantity', '>' , 0)->get();
        return view('frontend.home', compact('products'));
    }

    public function showRegistration()
    {
        $userTypes = UserType::where('status', 1)->get();
        
        return view('frontend.registration', compact('userTypes'));
    }

    public function processRegistration(Request $request)
    {
        //
    }

    public function showLogin()
    {
        return view('frontend.login');
    }

    public function processLogin(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [

          'email'     => 'required|email',
          'password'  => 'required',
    
        ]);
    
        if ($validator->fails()){
    
          return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $credentials = $request->except('_token','signin');
    
        if (auth()->attempt($credentials)){
    
            if(auth()->user()->user_type_id == 4){
    
                return redirect()->route('main');
            
            }else{
    
                session()->flash('message', 'Logged in successfully.');
                return redirect()->route('dashboard');
    
            }   
    
        }else{
    
            session()->flash('message', 'invalid User');
            return redirect()->back();
        }
    }

    public function logout()
    {
        $id = auth()->user()->id;
        $order = Order::where('customer_id',$id)->where('status', 0)->first();
    
        if($order){
          
            $details = OrderDetail::where('order_id',$order->id)->get();
            $order->delete();
            
            foreach ($details as $order) {
                $order->delete();
            }
        }

        Auth::logout();
        return redirect()->route('main');
    }
}
