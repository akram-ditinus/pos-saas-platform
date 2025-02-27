<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taxes=\App\Models\Tax::all();
        return view("super_admin.taxes.index",compact("taxes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super_admin.taxes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string',
            'percentage'=>"required"
        ]);

        $tax= new \App\Models\Tax();
        $tax->uid=getRandomCharactor(12,'Tax'); 
        $tax->title=$request->title;
        $tax->percentage=$request->percentage;
        $tax->status=$request->status;
        $tax->save();
        return redirect()->route('super.admin.taxes.index')->with("success","Tax generated successfully");
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
        $tax=\App\Models\Tax::where('uid',$id)->first();
        return view('super_admin.taxes.edit',compact('tax'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>"required",
            'percentage'=>"required",
            'status'=>"required"
        ]);

        $tax=\App\Models\Tax::where('uid',$id)->first()->update(['title'=>$request->title,'percentage'=>$request->percentage,'status'=>$request->status]);
        return redirect()->route('super.admin.taxes.index')->with('success','Tax updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
