<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

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
            $file_name = uniqid('category_',true).Str::random(10).'.'.$image->getClientOriginalExtension();

            if($image->isValid()){
                $image->storeAs('uploads', $file_name, ['disk' => 'my_files']);
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
        //dd($request->all());
        $validator      = Validator::make($request->all(), [

            'name'          => 'required',
            'slug'          => 'required',
            'status'        => 'required',
        ]);

        if ($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')){

            $image = $request->file('image');
            $file_name = uniqid('category_',true).Str::random(10).'.'.$image->getClientOriginalExtension();

            if($image->isValid()){
                $image->storeAs('uploads', $file_name, ['disk' => 'my_files']);
            }
        }

        $data = Category::findOrFail($id);

        $old_banner  = public_path('uploads/').$data->banner;

        if(isset($file_name)){

            File::delete($old_banner);
        }

        $data->update([

            'name'          =>$request->name,
            'slug'          =>$request->slug,
            'category_id'   =>$request->category_id,
            'banner'        =>isset($file_name) ? $file_name : $data->banner,
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
