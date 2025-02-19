<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return 'dashboard';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUsers = \App\Models\User::where('user_type','!=','admin')->get();
        return view("admin.users.index",compact("allUsers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'phone' => 'numeric',
        ]);

        $user = new \App\Models\User();
        $user->uuid=getRandomCharactor(12,'User'); 
        $user->name=$request->name; 
        $user->email=$request->email; 
        $user->phone=$request->phone; 
        $user->password=$request->password; 
        $user->save();

        return redirect()->route('admin.users.index')->with("success","User created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = \App\Models\User::find($id);
        return view("admin.users.edit",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'numeric',
        ]);

        $user = \App\Models\User::where('uuid',$id)->first();
        if($user){
            //$user->uuid=getRandomCharactor(12,'User'); 
            $user->name=$request->name; 
            $user->phone=$request->phone; 
            $user->status=$request->status; 
            $user->save();
            return redirect()->route('admin.users.index')->with("success","User updated successfully");
        }else{
            return redirect()->route('admin.users.index')->with("error","User not found");
        }
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
