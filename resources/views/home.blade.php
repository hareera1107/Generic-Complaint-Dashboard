@extends('layouts.dashboard.app')

@section('content')
<div class="container1">
    <div class="card">
        <a href="{{ route('complaints.index') }}">Total<br> Complaints
            <h3>{{ $allComplaintsCount }}</h3></a>
    </div>
    <div class="card">
        <a href="{{ route('complaints.pending') }}">Pending <br> Complaint
            <h3>{{ $pendingCount }}</h3></a>
    </div>
    
</div>


<div class="container2">
    
    <div class="card">
        <a href="{{ route('complaints.resolved') }}">Resolved<br> Complaint
            <h3>{{ $resolvedCount }}</h3>
        </a>
    </div>
    
    <div class="card">
        <a href="{{ route('complaints.inProgress') }}">In Progress <br> Complaint
            <h3>{{ $inProgressCount }}</h3></a>
    </div>
</div>

@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <button class="btn btn-primary"> Submit</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
