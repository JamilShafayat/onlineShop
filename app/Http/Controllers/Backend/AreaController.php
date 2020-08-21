<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();

        return view('backend.area.areas',compact('areas'));
    }

    public function store(Request $request)
    {
        $validator      = Validator::make($request->all(), [

            'name'    => 'required|unique:areas',
        ]);

        if ($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }

        Area::create([
            'name'        =>$request->name,
            'postcode'    =>$request->postcode,
            'description' =>$request->description,
        ]);

        return redirect()->back()->with(['status' => 'Area created successfully']);
    }

    public function update(Request $request, $id)
    {
        $data = Area::findorFail($id);

        $validator      = Validator::make($request->all(), [

            'name'    => 'required',
        ]);

        if ($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data->update([
          'name'           =>$request->name,
          'postcode'       =>$request->postcode,
          'description'    =>$request->description,
        ]);

        return redirect()->back()->with(['status' => 'Area updated successfully']);
    }

    public function destroy($id)
    {
        $data = Area::find($id);
        $data->delete();

        return redirect()->back()->with(['status' => 'Area deleted successfully']);
    }
}
