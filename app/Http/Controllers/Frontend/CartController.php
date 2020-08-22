<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $id){
        //dd($id);

        $customer_id    = auth()->user()->id;
        $product        = Product::find($id);
        $total_amount   = $product->sale_price * $request->quantity ;

        $order = Order::where('customer_id', $customer_id)->where('status',0)->first();

        if (isset($order)) {

            $orderDetails =	OrderDetail::where('order_id', $order->id)->where('product_id',$id)->first();
        }

        if ($order) {

            $order->update([
                
                'total_amount'    =>$total_amount + $order->total_amount,
                'paid_amount'     =>$total_amount + $order->paid_amount,
            ]);

            if (isset($orderDetails)){

                $orderDetails->update([

                    'quantity'  => $orderDetails->quantity + $request->quantity,
                ]);
            }else{

                OrderDetail::create([

                    'order_id'     			=>$order->id,
                    'product_id'     		=>$product->id,
                    'quantity'            	=>$request->quantity,
                    'price'              	=>$product->sale_price,
                ]);
            }	
        }else{

            $data = Order::create([

                'customer_id'           =>$customer_id,
                'total_amount'          =>$total_amount,
                'paid_amount'           =>$total_amount,
                'status'              	=>0,
            ]);

            OrderDetail::create([

                'order_id'     			=>$data->id,
                'product_id'     		=>$product->id,
                'quantity'            	=>$request->quantity,
                'price'              	=>$product->sale_price,
            ]);
            
        }
        
        return redirect()->route('main');
    }

    
    public function showCart()
    {
        $id=[];
        $order=[];
        $orderDetails =[];

        if(Auth::user()) {
            
            $id= auth()->user()->id;

            if($id){

                $order= Order::where('customer_id', $id)
                            ->where('status','pending')
                                ->with('customer')
                                    ->first();
            }
            
            if (isset($order)){

                $orderDetails= OrderDetail::where('order_id',$order->id)
                            ->with('order','product')->get();
            }
        }else{
            return redirect()->route('main');
        }
        
        return view('frontend.shopingCart', compact('order','orderDetails'));
    }

    public function showCheckout($id)
    {
        $order = Order::findOrFail($id);
        $orderDetails = OrderDetail::where('order_id', $id)
                                ->with('order','product')->get();

        return view('frontend.checkout', compact('order','orderDetails'));
    }

    public function processCheckout($id){
        //dd($id);
        $customer_id = auth()->user()->id;
        $order = Order::where('customer_id', $customer_id)->where('id',$id)->first();
        $orderDetails = OrderDetail::where('order_id',$order->id)->get();

        $order->update([

            'status' =>1,
        ]);
        
        return redirect()->back()->with(['status'=>'Order submited successfully']);
    }
}
