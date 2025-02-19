<?php

namespace App\Http\Controllers\RestaurantOwner;

use App\Fakers\Countries;
use App\Fakers\Languages;
use App\Fakers\RecentDevices;
use App\Fakers\Timezones;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUsers = \App\Models\User::where('user_type','!=','super_admin')->get();
        return view("admin.restaurant_owner.index",compact("allUsers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.restaurant_owner.create");
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

        return redirect()->route('admin.restaurant_owner.index')->with("success","User created successfully");
    }

    
    public function profile()
    {

        return view('restaurant_owner.profile',[
            'countries' => getCountriesArray(),
            'languages' => Languages::fakeLanguages(),
            'timezones' => Timezones::fakeTimezones(),
            'recentDevices' => RecentDevices::fakeRecentDevices()
        ]);
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
        return view("admin.restaurant_owner.edit",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'numeric',
        ]);

        $user = auth()->user();
        if($user){
            //$user->uuid=getRandomCharactor(12,'User'); 
            $user->name=$request->name; 
            $user->phone=$request->phone; 
            $user->address_line_1=$request->phone; 
            $user->address_line_2=$request->address_line_2; 
            $user->city=$request->city; 
            $user->state=$request->state; 
            $user->pincode=$request->pincode; 
            $user->country_id=$request->country_id; 
        
            $user->save();
            return redirect()->route('restaurant.owner.profile')->with("success","User updated successfully");
        }else{
            return redirect()->route('restaurant.owner.profile')->with("error","User not found");
        }
        

    }


    
    /**
     * Update the specified resource in storage.
     */
    public function updateProfileImage(Request $request)
    {
        
        $request->validate([
            'profile_image' => 'mimes:jpeg,png,jpg',
        ]);

        if($file = $request->hasFile('profile_image')) {
            $file = $request->file('profile_image') ;
            $fileName = auth()->user()->uuid.".png";
            $destinationPath = public_path().'/images/users/profile' ;
            $file->move($destinationPath,$fileName);
            return redirect('/restaurant-owner/profile');
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
