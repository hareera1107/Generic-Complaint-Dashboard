<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\District;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Complaint $complaint)
    {
        
        $complaints = Complaint::paginate(5);
        // dd($complaints);
        return view('complaints.index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $districts = District::all();
        return view('complaints.create', compact('categories', 'districts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'district_id' => 'required',
            'complaint' => ['required', 'min:5'],
            'registration_date' => 'required',
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
        $categories = Category::all();
        $districts = District::all();
        return view('complaints.edit',compact('complaint','categories', 'districts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complaint $complaint)
    {
        $request->validate([
            'category_id' => 'required',
            'district_id' => 'required',
            'complaint' => ['required', 'min:5'],
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

    public function pending(Complaint $complaint)
    {
        $complaints = Complaint::where('status', 'pending')->paginate(5);
        // dd($complaints);
        if ($complaints->isEmpty()) {
            $complaints = collect();
        }
        return view('complaints.pending', compact('complaints'));
    }

    public function inProgress(Complaint $complaint)
    {
        $complaints = Complaint::where('status', 'in_progress')->paginate(5);
        // dd($complaints);
        return view('complaints.inProgress', compact('complaints'));
    }

    public function resolved(Complaint $complaint)
    {
        $complaints = Complaint::where('status', 'resolved')->paginate(5);
        // dd($complaints);
        return view('complaints.resolved', compact('complaints'));
    }

    public function markInProgress($id)
    {
    $complaint = Complaint::findOrFail($id);
    $complaint->status = 'in_progress';
    $complaint->save();

    return redirect()->route('complaints.pending')->with('success','Complaint status updated to In Progress');
    }

    public function markResolved($id)
    {
    $complaint = Complaint::findOrFail($id);
    $complaint->status = 'resolved';
    $complaint->save();

    return redirect()->route('complaints.inProgress')->with('success','Complaint status updated to Resolved');
    }

    public function charts()
    {
        $allComplaintsCount = Complaint::all()->count();
        $pendingCount = Complaint::where('status', 'pending')->count();
        $inProgressCount = Complaint::where('status', 'in_progress')->count();
        $resolvedCount = Complaint::where('status', 'resolved')->count();
        return view('complaints.charts', compact('pendingCount', 'inProgressCount', 'resolvedCount', 'allComplaintsCount'));
    }

    public function reports()
    {
        $allComplaintsCount = Complaint::all()->count();
        $pendingCount = Complaint::where('status', 'pending')->count();
        $inProgressCount = Complaint::where('status', 'in_progress')->count();
        $resolvedCount = Complaint::where('status', 'resolved')->count();

        $complaints = Complaint::where('registration_date', '>=', Carbon::now()->subDays(5))
        ->orderBy('registration_date', 'desc')
        ->get();
        $datewiseComplaintsCount = Count($complaints);
    
        $categorywiseComplaints = Category::withCount('complaints')->get();
        $categoriesComplaintsCount = 0;
        foreach($categorywiseComplaints as $categoryCount){
            $categoriesComplaintsCount = $categoriesComplaintsCount + $categoryCount->complaints_count;
        }
        
        $districtwiseComplaints = District::withCount('complaints')->get();
        $districtsComplaintsCount = 0;
        foreach($districtwiseComplaints as $districtCount){
            $districtsComplaintsCount = $districtsComplaintsCount + $districtCount->complaints_count;
        }
        return view('complaints.reports', compact('pendingCount', 'inProgressCount', 'resolvedCount', 'allComplaintsCount', 'complaints', 'datewiseComplaintsCount', 'categorywiseComplaints', 'categoriesComplaintsCount', 'districtwiseComplaints' , 'districtsComplaintsCount'));
    }


}
