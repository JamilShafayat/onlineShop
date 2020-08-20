<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('Category','supplier')->all();
        $suppliers = User::where('user_type_id', 2)->where('status', 1)->get();
        $categories = Category::where('status', 1)->get();

        return view('backend.product.products', compact('products','suppliers','categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'title'         => 'required|unique:products',
            'category_id'   => 'required',
            'brought_price' => 'required',
            'sale_price'    => 'required',
            'quantity'      => 'required',
            'image'         => 'file|max:10240',
        ]);
      
        if($validator->fails()){
      
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('product_pic')){
      
            $product_pic = $request->file('product_pic');
            $file_name = uniqid('product_pic',true).Str::random(10).'.'.$product_pic->getClientOriginalExtension();
            
            if($product_pic->isValid()){
              $product_pic->storeAs('image',$file_name);
            }       
        }

        Product::create([
            'title'         =>$request->title,
            'brand'         =>$request->brand,
            'image'         =>$file_name,
            'category_id'   =>$request->category_id,
            'supplier_id'   =>$request->supplier_id,
            'brought_price' =>$request->brought_price,
            'sale_price'    =>$request->sale_price,
            'offer_price'   =>$request->offer_price,
            'description'   =>$request->description,
            'quantity'      =>$request->quantity,
            'unit'          =>$request->unit,
        ]);

        return redirect()->back()->with('success','Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::with('category','supplier')->find($id);
        $categories = Category::where('status', 1)->get();

        return view('backend.product.product', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'         => 'required',
            'category_id'   => 'required',
            'brought_price' => 'required',
            'sale_price'    => 'required',
            'quantity'      => 'required',
            'image'         => 'file|max:10240',
        ]);

        if($validator->fails()){
      
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('product_pic')) {
      
            $product_pic = $request->file('product_pic');
            $file_name = uniqid('product_pic',true).Str::random(10).'.'.$product_pic->getClientOriginalExtension();
            
            if($product_pic->isValid()){
              $product_pic->storeAs('image',$file_name);
            }

            $data = Product::findorFail($id);
      
            $data->update([
                'title'         =>$request->title,
                'brand'         =>$request->brand,
                'image'         =>$file_name,
                'category_id'   =>$request->category_id,
                'supplier_id'   =>$request->supplier_id,
                'brought_price' =>$request->brought_price,
                'sale_price'    =>$request->sale_price,
                'offer_price'   =>$request->offer_price,
                'description'   =>$request->description,
                'quantity'      =>$request->quantity,
                'unit'          =>$request->unit,
                'status'        =>$request->status,
            ]); 
      
        }else{
            $data = Product::findorFail($id);
      
            $data->update([
                'title'         =>$request->title,
                'brand'         =>$request->brand,
                'image'         =>$file_name,
                'category_id'   =>$request->category_id,
                'supplier_id'   =>$request->supplier_id,
                'brought_price' =>$request->brought_price,
                'sale_price'    =>$request->sale_price,
                'offer_price'   =>$request->offer_price,
                'description'   =>$request->description,
                'quantity'      =>$request->quantity,
                'unit'          =>$request->unit,
                'status'      =>$request->status,
            ]); 
        }
        return redirect()->back()->with('success','Product updated successfully.');
    }

    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
    
        return redirect()->back()->with('success','Product deleted successfully.');
    }
}
