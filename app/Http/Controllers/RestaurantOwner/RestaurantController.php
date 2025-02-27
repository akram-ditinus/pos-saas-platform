<?php

namespace App\Http\Controllers\RestaurantOwner;

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
        return view("restaurant_owner.restaurants.index", compact("restaurants"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $currencies = \App\Models\Currency::all();
        return view("restaurant_owner.restaurants.create", ['countries' => getCountriesArray(), 'currencies' => $currencies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $request->validate([
            'title' => 'required',
            'email' => 'required|unique:restaurants,email',
            'phone' => 'numeric',
            'pincode' => 'numeric',
            'logo' => 'mimes:jpeg,png,jpg',
        ]);

        $uid= getRandomCharactor(12, 'Restaurant');
        
        $restaurant = new \App\Models\Restaurant();
        
        if($file = $request->hasFile('logo')) {
            $file = $request->file('logo') ;
            $fileName = $uid.".png";
            $destinationPath = public_path().'/images/restaurant/logo/' ;
            $file->move($destinationPath,$fileName);
            $restaurant->logo = '/images/restaurant/logo/'.$uid.".png";
        }


        $restaurant->uid =$uid;
        $restaurant->title = $request->title;
        $restaurant->email = $request->email;
        $restaurant->user_id = auth()->user()->id;
        $restaurant->phone = $request->phone;
        $restaurant->type = $request->type;
        $restaurant->address_line_1 = $request->address_line_1;
        $restaurant->address_line_2 = $request->address_line_2;
        $restaurant->landmark = $request->landmark;
        $restaurant->city = $request->city;
        $restaurant->state = $request->state;
        $restaurant->pincode = $request->pincode;
        $restaurant->country_id = $request->country_id;
        $restaurant->longitude = $request->longitude;
        $restaurant->latitude = $request->latitude;
        $restaurant->delivery_radius_in_km = $request->delivery_radius_in_km;
        $restaurant->currency = $request->currency;
        $restaurant->no_of_floors = $request->no_of_floors;
        $restaurant->no_of_tables = $request->no_of_tables;
        $restaurant->has_table_booking = $request->has_table_booking;
        $restaurant->has_online_delivery = $request->has_online_delivery;
        $restaurant->status = 'draft';
        
        $restaurant->save();
        return redirect()->route('restaurant.owner.restaurants.index')->with("success", "User updated successfully");
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
        $restaurant = \App\Models\Restaurant::where('uid', $id)->first();
        $countries = array_column(getCountriesArray(),'name','dial_code');
        $currencies=\App\Models\Currency::all();
        return view('restaurant_owner.restaurants.edit', compact('restaurant', 'countries','currencies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required',
            'phone' => 'numeric',
            'pincode' => 'numeric',
        ]);
        
        $restaurant = \App\Models\Restaurant::where('uid', $id)->first();
        if ($restaurant) {
            $restaurant->uid = getRandomCharactor(12, 'Restaurant');
            $restaurant->title = $request->title;
            $restaurant->phone = $request->phone;
            $restaurant->type = $request->type;
            $restaurant->logo = $request->logo;
            $restaurant->address_line_1 = $request->address_line_1;
            $restaurant->address_line_2 = $request->address_line_2;
            $restaurant->landmark = $request->landmark;
            $restaurant->city = $request->city;
            $restaurant->state = $request->state;
            $restaurant->pincode = $request->pincode;
            $restaurant->country_id = $request->country_id;
            $restaurant->longitude = $request->longitude;
            $restaurant->latitude = $request->latitude;
            $restaurant->delivery_radius_in_km = $request->delivery_radius_in_km;
            $restaurant->currency = $request->currency;
            $restaurant->no_of_floors = $request->no_of_floors;
            $restaurant->no_of_tables = $request->no_of_tables;
            $restaurant->has_table_booking = $request->has_table_booking;
            $restaurant->has_online_delivery = $request->has_online_delivery;
            $restaurant->total_ernings = $request->total_ernings;
            $restaurant->login_platform = $request->login_platform;
            $restaurant->status = $request->status;
            $restaurant->email_verified_at = $request->email_verified_at;
            $restaurant->remember_token = $request->remember_token;
            $restaurant->save();
            return redirect()->route('restaurant.owner.restaurants.index')->with("success", "User updated successfully");
        } else {
            return redirect()->route('restaurant.owner.restaurants.index')->with("error", "Restaurant not found");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\Restaurant::where('uid',$id)->delete();
        return redirect()->route('restaurant.owner.restaurants.index')->with("error", "Restaurant deleted successfully");
    }
}
