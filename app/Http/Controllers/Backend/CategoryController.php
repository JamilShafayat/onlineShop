<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        $products = Product::with('category','supplier')->get();

        return view('backend.category.categories', compact('categories','products'));
    }

    public function store(Request $request)
    {
        $validator    = Validator::make($request->all(), [

            'name'    => 'required|unique:categories',
        ]);

        if ($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')){

            $image = $request->file('image');
            $file_name = uniqid('image',true).Str::random(10).'.'.$image->getClientOriginalExtension();

            if($image->isValid()){
              $image->storeAs('image',$file_name);
            }
        }

        Category::create([

            'name'          => $request->name,
            'banner'        => isset($file_name) ? $file_name : NULL,
            'category_id'   => $request->category_id,
        ]);

        return redirect()->back()->with(['status' => 'Category created successfully']);
    }

    public function update(Request $request, $id)
    {
        $validator      = Validator::make($request->all(), [

            'name'          => 'required',
            'category_id'   => 'required',
        ]);

        if ($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = Category::findOrFail($id);

        $data->update([

            'name'          =>$request->name,
            'category_id'   =>$request->category_id,
            'status'        =>$request->status,
        ]);

        return redirect()->back()->with(['status' => 'Category updated successfully']);
    }

    public function delete($id){

        $data = Category::find($id);
        $data->delete();

        return redirect()->back()->with(['status' => 'Category deleted successfully']);
    }
}
