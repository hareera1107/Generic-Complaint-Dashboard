<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(District $districts)
    {
        $districts = District::paginate(5);
        return view('configurations/districts/index', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('configurations.districts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'district' => ['required', 'regex:/^[a-zA-Z ]*$/',  'min:5']
        ]);
        
        
        District::create($request->post());

        return redirect()->route('districts.index')->with('success','District has been created successfully.');
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
    public function edit(District $district)
    {
        return view('configurations.districts.edit', compact('district'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, District $district)
    {
        $request->validate([
            'district' => ['required', 'regex:/^[a-zA-Z ]*$/', 'min:5']
        ]);
        
        $district->fill($request->post())->save();

        return redirect()->route('districts.index')->with('success','District Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        $district->delete();
        return redirect()->route('districts.index')->with('success','District has been deleted successfully');
    }
}
