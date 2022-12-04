<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CrmController extends Controller
{
    public function index(){
        $crms = User::where('type','crm')->where('is_active','1')->get();
        return view('backend.pages.crm.index',compact('crms'));

    }
    public function create(){
        $roles = Role::where('is_active',1)->get();
        return view('backend.pages.crm.create',compact('roles'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|unique:users,phone',
            'role'=>'required',
            'password'=>'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'=>'min:8'
        ]);
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'role_id'=>$request->role,
            'type'=>'crm',
            'password'=>Hash::make($request->password)
        ]);

        return redirect()->route('admin.crm.index')->with('success','Successfully add crm.');
    }
    public function edit(Request $request, $id){
        $crm = User::where('id',$id)->first();
        $roles = Role::where('is_active',1)->get();
        return view('backend.pages.crm.edit',compact('crm','roles'));
    }

    public function update(Request $request, $id){
        $crm = User::where('type','crm')->where('is_active','1')->where('id',$id)->first();

        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email,'.$id,
            'phone'=>'required|unique:users,phone,'.$id,
            'role'=>'required',
        ]);
        $crm->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'role_id'=>$request->role,
        ]);
        return redirect()->route('admin.crm.index')->with('success','Successfully update crm.');
        // dd($request->all());
    }
}
