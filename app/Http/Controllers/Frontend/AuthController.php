<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserType;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Socialite;
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

    public function redirectToProvider()
    {
        return Socialite::driver('github')->stateless()->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('github')->stateless()->user();
            dd($user);
        } catch (\Exception $e) {
            return redirect('/login')->with('error','Try after some time');
        }
        
        // $existingUser = User::where('social_id', $user->id)->first();


        // return 'hello';
        // $user = Socialite::driver('github')->user();
        // $user = Socialite::driver('github')->stateless();
        // dd($user);
        
        
        $user1 = User::firstOrCreate([
            'email' => $user->email
        ], [
            'user_name'         => $user->name,
            'email'             => $user->email,
            'password'          => bcrypt(123456),
            'email_verified_at' => Carbon::now(),
            'user_type_id'      => 4,
        ]);

        Auth::login($user1, true);
        return redirect()->route('main');
    }

    public function loginViaFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function processLoginViaFacebook()
    {
        $user = Socialite::driver('facebook')->user();
        dd($user);
        // $user->token;
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
