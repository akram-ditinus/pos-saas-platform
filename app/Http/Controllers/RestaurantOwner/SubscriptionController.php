<?php

namespace App\Http\Controllers\RestaurantOwner;

use App\Fakers\Events;
use App\Fakers\Transactions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscriptions=\App\Models\SubscriptionPlan::where('status','active')->get();
        
        return view("restaurant_owner.subscriptions.index",compact("subscriptions"));
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
        $subscription = \App\Models\SubscriptionPlan::where('uid',$id)->first();
        if($subscription){
            //return view('restaurant_owner.subscriptions.show',compact('subscription')); 
            return view('restaurant_owner.subscriptions.show', [
            'transactions' => Transactions::fakeTransactions(),
            'subscription'=> $subscription
        ]);
        }
       
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
