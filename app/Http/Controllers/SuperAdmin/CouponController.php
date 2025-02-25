<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = \App\Models\Coupon::all();
        return view("super_admin.coupons.index", compact("coupons"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("super_admin.coupons.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'amount'=>'required|numeric'
        ]);

        $coupon = new \App\Models\Coupon();

        $coupon->uid=getRandomCharactor(12,'Coupon'); 
        $coupon->title = $request->title;   
        $coupon->code = $request->code;   
        $coupon->type = $request->type;   
        $coupon->amount = $request->amount;   
        $coupon->status = $request->status;   
        $coupon->save();

        return redirect()->route('super.admin.coupons.index')->with('success','Coupon created successfully');
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
        $coupon=\App\Models\Coupon::where('uid',$id)->first();
        return view("super_admin.coupons.edit",compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coupon = \App\Models\Coupon::where('uid',$id)->first();

        $coupon->title = $request->title;   
        $coupon->code = $request->code;   
        $coupon->type = $request->type;   
        $coupon->amount = $request->amount;   
        $coupon->status = $request->status;   
        $coupon->save();
        return redirect()->route('super.admin.coupons.index')->with("success","Coupon updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
