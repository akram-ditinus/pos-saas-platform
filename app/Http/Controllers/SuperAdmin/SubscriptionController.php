<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allSubscriptions = \App\Models\SubscriptionPlan::all();
        return view("super_admin.subscriptions.index", compact("allSubscriptions"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("super_admin.subscriptions.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'numeric',
            'duration_in_days' => 'numeric'
        ]);

        $subscription = new \App\Models\SubscriptionPlan();

        $subscription->uid=getRandomCharactor(12,'SubscriptionPlan'); 
        //dd($subscription->uid);
        $subscription->title = $request->title;
        $subscription->price = $request->price;
        $subscription->sale_price = $request->sale_price;
        $subscription->trial_period_in_days = $request->trial_period_in_days;
        $subscription->duration_in_days = $request->duration_in_days;
        $subscription->remarks = $request->remarks;
        $subscription->status = $request->status;
        $subscription->save();
        return redirect()->route('super.admin.subscriptions.index')->with("success", "Subscription added successfully");
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
        $subscription = \App\Models\SubscriptionPlan::where('uid',$id)->first();
        return view("super_admin.subscriptions.edit",compact("subscription"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    

        $subscription = \App\Models\SubscriptionPlan::where('uid',$id)->first();
        // $subscription->uid=getRandomCharactor(12,'SubscriptionPlan'); 
        // dd($subscription->uid);
        $subscription->title = $request->title;
        $subscription->price = $request->price;
        $subscription->sale_price = $request->sale_price;
        $subscription->trial_period_in_days = $request->trial_period_in_days;
        $subscription->duration_in_days = $request->duration_in_days;
        $subscription->remarks = $request->remarks;
        $subscription->status = $request->status;
        
        // dump($subscription);
        // dd($request->all());
        $subscription->save();
        return redirect()->route('super.admin.subscriptions.index')->with("success", "Subscription updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
