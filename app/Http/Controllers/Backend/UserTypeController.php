<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    public function index()
    {
        $userTypes = UserType::all();

        return view('backend.userType.userTypes', compact('userTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:userTypes',
        ]);

        if ($validator->fails()){
            
            return redirect()->back()->withErrors($validator)->withInput();
        }

        UserType::create($request->all());

        return redirect()->back()->with('success','UserType created successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        if ($validator->fails()){
            
            return redirect()->back()->withErrors($validator)->withInput();
        }

        UserType::whereId($id)->update($validatedData);

        return redirect()->back()->with('success','UserType updated successfully.');
    }

    public function destroy($id)
    {
        UserType::where('id',$id)->delete();

        return redirect()->back()->with('success','UserType deleted successfully.');
    }
}
