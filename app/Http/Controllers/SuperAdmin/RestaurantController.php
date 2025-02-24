<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = \App\Models\Restaurant::all();
        $countries = array_column(getCountriesArray(),'name','dial_code');
        //dd($countries);
        return view("super_admin.restaurants.index", compact("restaurants",'countries'));
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
        $currencies = \App\Models\Currency::all();
        $countries = array_column(getCountriesArray(),'name','dial_code');
        $restaurant=\App\Models\Restaurant::where('uid',$id)->first();
       
        return view("super_admin.restaurants.show", compact('countries','currencies','restaurant'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
