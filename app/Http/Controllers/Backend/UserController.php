<?php

namespace App\Http\Controllers\Backend;

use App\Models\Area;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $userTypes = UserType::where('status', 1)->get();
        $areas = Area::where('status', 1)->get();

        return view('backend.user.users',compact('users','userTypes','areas'));
    }

    public function store(Request $request)
    {
        $validator= Validator ::make($request->all(), [
            'user_name'   => 'required|unique:users',
            'email'       => 'required|email|unique:users,email',
            'password'    => 'required|min:6|confirmed',
            'user_type_id'=> 'required',
        ]);
      
        if ($validator->fails()){
      
            return redirect()->back()->withErrors($validator)->withInput();
        }
      
        $user = User::create([
      
            'first_name'    => trim($request->input('first_name')),
            'last_name'     => trim($request->input('last_name')),
            'user_name'     => trim($request->input('user_name')),
            'phone_no'      => trim($request->input('phone_no')),
            'email'         => strtolower(trim($request->input('email'))),
            'password'      => bcrypt(trim($request->input('password'))),
            'user_type_id'  => $request->input('user_type_id'),
            'area_id'       => $request->input('area_id'),
            'nid'           => trim($request->input('nid')),
            'birth_date'    => trim($request->input('birth_date')),
            'address'       => trim($request->input('address')),
            'guardian_name' => trim($request->input('guardian_name')),
            'guardian_phone'=> trim($request->input('guardian_phone')),
            'status'        => trim($request->input('status')),
        ]);
      
        return redirect()->back()->with('success','User created successfully.');
    }

    public function show($id)
    {
        $user = User::findorFail($id);
        $userTypes = UserType::where('status', 1)->get();
        $areas = Area::where('status', 1)->get();
        
        return view('backend.user.user', compact('user','userTypes','areas'));
    }

    public function update(Request $request,$id)
    {
        //dd($request->all());
        $data = User::findorFail($id);
    
        if(auth()->user()->type != 'admin'){
    
            $validator      = Validator::make($request->all(), [

                'user_name'   => 'required',
                'email'       => 'required|email',
                'user_type_id'=> 'required',
            ]);
    
            if ($validator->fails()){
        
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            if ($request->hasFile('profile_pic')){
    
                $profile_pic = $request->file('profile_pic');
                $file_name = uniqid('profile_pic',true).Str::random(10).'.'.$profile_pic->getClientOriginalExtension();
                
                if($profile_pic->isValid()){
                $profile_pic->storeAs('image',$file_name);
                }
    
                $data->update([
        
                    'first_name'    => trim($request->input('first_name')),
                    'last_name'     => trim($request->input('last_name')),
                    'user_name'     => trim($request->input('user_name')),
                    'phone_no'      => trim($request->input('phone_no')),
                    'email'         => strtolower(trim($request->input('email'))),
                    'type'          => trim($request->input('type')),
                    'image'         => $file_name,
                    'nid'           => trim($request->input('nid')),
                    'birth_date'    => trim($request->input('birth_date')),
                    'address'       => trim($request->input('address')),
                    'guardian_name' => trim($request->input('guardian_name')),
                    'guardian_phone'=> trim($request->input('guardian_phone')),
                    'password'      => bcrypt(trim($request->input('password'))),
                ]);
    
            }else{
    
                $data->update([
        
                'first_name'    => trim($request->input('first_name')),
                'last_name'     => trim($request->input('last_name')),
                'user_name'     => trim($request->input('user_name')),
                'phone_no'      => trim($request->input('phone_no')),
                'email'         => strtolower(trim($request->input('email'))),
                'type'          => trim($request->input('type')),
                'nid'           => trim($request->input('nid')),
                'birth_date'    => trim($request->input('birth_date')),
                'address'       => trim($request->input('address')),
                'guardian_name' => trim($request->input('guardian_name')),
                'guardian_phone'=> trim($request->input('guardian_phone')),
                'password'      => bcrypt(trim($request->input('password'))),
        
                ]);
            }  
        }else{
    
            $validator = Validator::make($request->all(), [
    
              'status'  => 'required',
    
            ]);
    
            if ($validator->fails()){
    
              return redirect()->back()->withErrors($validator)->withInput();
            }
    
    
            $data->update([
    
              'status'  => trim($request->input('status')),
    
            ]);
        }
    
        return redirect()->back()->with('success','User updated successfully.');
    }

    public function destroy($id)
    {
        $data=User::find($id);
        $data->delete();

        return redirect()->back()->with('success','User deleted successfully.');
    }
}