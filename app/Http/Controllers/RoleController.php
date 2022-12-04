<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public  function index(){
        $roles = Role::get();
        return view('backend.pages.role.index',compact('roles'));
    }

    public  function create(){

        return view('backend.pages.role.create');
    }

    public  function store(Request $request){

        $request->validate([
            'name' => 'required|unique:roles'
        ]);
        // dd($request->all());

        Role::create([
            'name'=>$request->name,
        ]);

        return redirect()->route('admin.role.index')->with('success','Successfully create role');
    }

    public function edit(Request $request){
        $role = Role::where('id',$request->id)->first();
        return view('backend.pages.role.edit',compact('role'));

    }

    public function update(Request $request){
        $role = Role::find($request->id);
        $request->validate([
            'name' => 'required|unique:roles,name,'.$role->id,
        ],[
            'name.unique'=>'The role name has already been taken.'
        ]);
        $role->update([
            'name'=>$request->name,
        ]);
        return redirect()->route('admin.role.index')->with('success','Successfully update role');

    }
}
