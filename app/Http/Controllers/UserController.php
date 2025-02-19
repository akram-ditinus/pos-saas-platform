<?php

namespace App\Http\Controllers;

use App\Fakers\Countries;
use App\Fakers\Languages;
use App\Fakers\RecentDevices;
use App\Fakers\Timezones;
use Illuminate\Http\Request;

class UserController extends Controller
{

    
    /**
     * Display the specified resource.
     */
    public function profile()
    {

        return view('user.profile',[
            'countries' => Countries::fakeCountries(),
            'languages' => Languages::fakeLanguages(),
            'timezones' => Timezones::fakeTimezones(),
            'recentDevices' => RecentDevices::fakeRecentDevices()
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'profile_image' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',
        ]);

        if($file = $request->hasFile('profile_image')) {
            $file = $request->file('profile_image') ;
            $fileName = auth()->user()->uuid.".png";
            $destinationPath = public_path().'/images/users/profile' ;
            $file->move($destinationPath,$fileName);
            return redirect('/user/profile');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProfileImage(Request $request, string $id)
    {
        
        $request->validate([
            'profile_image' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',
        ]);

        if($file = $request->hasFile('profile_image')) {
            $file = $request->file('profile_image') ;
            $fileName = auth()->user()->uuid.".png";
            $destinationPath = public_path().'/images/users/profile' ;
            $file->move($destinationPath,$fileName);
            return redirect('/user/profile');
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
