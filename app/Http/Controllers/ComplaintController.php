<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Complaint $model )
    {
        return view('complaints.index', ['complaints' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('complaints.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'district' => 'required',
            'complaint' => 'required',
        ]);
        
        
        Complaint::create($request->post());

        return redirect()->route('complaints.index')->with('success','Complaint has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint)
    {
        return view('complaints.edit',compact('complaint'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complaint $complaint)
    {
        $request->validate([
            'category' => 'required',
            'district' => 'required',
            'complaint' => 'required',
        ]);
        
        $complaint->fill($request->post())->save();

        return redirect()->route('complaints.index')->with('success','Complaint Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint)
    {
        $complaint->delete();
        return redirect()->route('complaints.index')->with('success','Complaint has been deleted successfully');
    }
}
