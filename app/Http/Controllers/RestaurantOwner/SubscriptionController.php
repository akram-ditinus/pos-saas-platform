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

        $subscription = \App\Models\SubscriptionPlan::with('tax')->where('uid',$id)->first();
        $subscription->tax_amount =0;
        $subscription_amount=$subscription->sale_price?$subscription->sale_price:$subscription->price;
        if($subscription){
            if(!empty($subscription->tax->percentage)){
                $subscription->tax_amount=($subscription->tax->percentage*$subscription_amount)/100;
            }
            //return view('restaurant_owner.subscriptions.show',compact('subscription')); 
            return view('restaurant_owner.subscriptions.show', [
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

    /**
     * Apply coupon in subscription 
     */
    public function applyCoupon(Request $request)
    {
        $coupon = \App\Models\Coupon::where('code',$request->coupon_code)->first();
        if(!empty($coupon->amount)){
            return (['status'=>'success','type'=>$coupon->type,'cpnamt'=>$coupon->amount]);
        }else{
            return (['status'=>'error']);
        }
    }


}
