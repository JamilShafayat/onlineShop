<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderController extends Controller
{
  public function index()
  {
    $id = auth()->user()->id;

    if (auth()->user()->user_type_id == 3)
    {
      $orders = Order::where('distributor_id', $id)->with('customer','distributor','products')->get();

    }elseif(auth()->user()->user_type_id == 4){

      $orders = Order::where('customer_id', $id)->with('customer','distributor','products')->get();

    }elseif (auth()->user()->user_type_id == 1) {

      $orders = Order::with('customer','distributor','products')->get();
    }

    return view('backend.order.orders',compact('orders'));
  }


  public function show($id)
  {
    $order = Order::with('customer','distributor','products')->findOrFail($id);
    $orderDetails = OrderDetail::with('product','cart')->where('cart_id',$id)->get();
    // $distributors = User::where('type','distributor')->where('area_id',$cart->area_id)->get();

    return view('backend.order.order', compact('order','orderDetails'));
  }

  public function update(Request $request, $id)
  {
    $order= Order::find($id);

    if (auth()->user()->type =='admin') {

      $order->update([

        'distributor_id'   => $request->distributor_id,
        'status'           =>'processing',
      ]);

    }else{

      $order->update([

        'status' => $request->status,
      ]);
    }

    return redirect()->back()->with('success','Order updated successfully.');
  }

  public function destroy($id)
  {
    $data = Order::find($id);
    $data->delete();

    return redirect()->back()->with('success','Order deleted successfully.');
  }

  public function pdfExport($id)
  {
    $order = Order::find($id);
    $orderDetails = OrderDetail::where('order_id',$order->id)->get();

    $pdf = PDF::loadview('backend.pdf',['order'=> $order,'orderDetails'=>$orderDetails])->setPaper('a4','portrait');

    $fileName = $order->customer->user_name;

    return $pdf->stream($fileName . '.pdf');
  }

  public function reportGenerate()
  {
    $data=[];

    if(!empty($_GET['from_date']))
    {
      $fromDate=$_GET['from_date'];
      $toDate=$_GET['to_date'];

      $data=CartDetail::whereBetween('created_at',[ $fromDate,$toDate])->get();

      $total = $data->sum('price');

      return view('backend.report',compact('data','total'));
    }

    return view('backend.report',compact('data'));
  }
}
