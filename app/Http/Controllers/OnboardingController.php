<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onboarding;
use Exception;

class OnboardingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('onboarding.create');
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
        try {            
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'nullable|string|max:18',
                'address' => 'nullable|string|max:500',
                'project_name' => 'required|string|max:255',
            ]);

            Onboarding::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'address' => $validated['address'],
                'project_name' => $validated['project_name'],
            ]);

            return redirect()->route('onbording.index')->with('success', 'Onboarding record created successfully!');
        } catch (Exception $e) {
            \Log::error('Onboarding Store Error: ' . $e->getMessage());
            return redirect()->route('onbording.index')->with('error', 'Failed to create onboarding record. Please try again.');
        }
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
