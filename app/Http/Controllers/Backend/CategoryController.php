<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
    
        $categories = Category::all();
        

        return view('backend.category.categories', compact('categories'));
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        if ($validator->fails()){
            
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Category::create([

            'name'    =>$request->name,
        ]);
    
        return redirect()->back()->with(['status' => 'Category created successfully']);
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
            
        if ($validator->fails()){
            
            return redirect()->back()->withErrors($validator)->withInput();
        }
            
        $data = Category::findorFail($id);

        $data->update([

            'name'  =>$request->name,
        ]);

        return redirect()->back()->with(['status' => 'Category updated successfully']);
    }

    public function delete($id){
    
        $data=Category::find($id);
        $data->delete();
    
        return redirect()->back()->with(['status' => 'Category deleted successfully']);
    }
}
