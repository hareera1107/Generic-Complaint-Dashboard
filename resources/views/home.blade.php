@extends('layouts.dashboard.app')

@section('content')
<div class="container1">
    <div class="card">
        <a href="resolved">Resolved<br> Complaint</a>
    </div>
    <div class="card">
        <a href="inprogress">In Progress <br> Complaint</a>
    </div>
</div>


<div class="container2">
    <div class="card">
        <a href="pending">Pending <br> Complaint</a>
    </div>
    
    <div class="card">
        <a href="report">Complaint<br> Reports</a>
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
