@extends('layouts.dashboard.app')
@section('content')
    <h1>InProgress Complaints</h1>
    <form action="{{ route('home') }}">
        <button class="btn btn-purple" style="margin-left: 91%; margin-bottom:1ch" >Back</button>
    </form>
    @if (session('success'))
        <div class="col-md-4"></div>
        <div class="alert alert-success col-md-6" role="alert">
            {{ session('success') }}
        </div><br>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>District</th>
                <th>Complaint</th>
                <th>Registration Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (count($complaints) > 0)
                @foreach ($complaints as $complaint)
                    <tr>
                        <td>{{ $complaint->id }}</td>
                        <td>{{ $complaint->category }}</td>
                        <td>{{ $complaint->district }}</td>
                        <td>{{ $complaint->complaint }}</td>
                        <td>{{ $complaint->created_at }}</td>
                        <td>
                            @if ($complaint->status === 'in_progress')
                                <a class="btn btn-sm btn-warning">In Progress</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('complaints.markResolved', $complaint->id) }}" class="btn btn-sm btn-success" id="markResolvedBtn">Mark as Resolved</a>
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="7">
                    <p>No complaints in Inprogress.</p>
                </td>
            </tr>
            @endif
            {{-- <script>
                $(document).ready(function() {
                    $('#markResolvedBtn').click(function() {
                        $.ajax({
                            url: "{{ route('complaints.markResolved', $complaint->id) }}",
                            type: "PUT",
                            data: {
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                // Reload the page or perform any other desired action
                                location.reload();
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    });
                });
            </script> --}}
        </tbody>
    </table>
    <div class="footer">
        @if (count($complaints) > 0)
        <div class="pagination-container">
            <div class="pagination-info">
                Showing {{ $complaints->firstItem() }} - {{ $complaints->lastItem() }} of {{ $complaints->total() }}
                results
            </div>
            <div class="pagination-links">
                @if ($complaints->onFirstPage())
                    <span class="arrow">&laquo; Previous</span>
                @else
                    <a href="{{ $complaints->previousPageUrl() }}" class="arrow">&laquo; Previous</a>
                @endif

                @if ($complaints->hasMorePages())
                    <a href="{{ $complaints->nextPageUrl() }}" class="arrow">Next &raquo;</a>
                @else
                    <span class="arrow">Next &raquo;</span>
                @endif
            </div>
        </div>
        @endif
    </div>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 900px;
            /* margin: 0 auto; */
            color: rgb(20, 19, 19);
            margin-left: 400px;
        }

        th,
        td {
            border: 1px solid rgb(12, 10, 10);
            padding: 8px;
            text-align: left;
        }

        th {
            font-size: 22px;
            font-weight: bold;
            background-color: rgb(97, 53, 97);
            color: aliceblue;
        }

        td:nth-child(even) {
            background-color: white;
        }

        h1 {
            justify-content: center;
            margin-left: 400px;
            margin-top: 25px;
            margin-bottom: 0px;
        }

        .btn-purple {
        color: #ffffff;
        background-color: #800080;
        border-color: #800080;
    }
    p {
            justify-content: center;
            margin-left: 350px;
            /* margin-top: 25px; */
            margin-bottom: 0px;
            color: red;
        }
    .btn-purple:hover {
        color: #ffffff;
        background-color: #6a006a;
        border-color: #6a006a;
    }

        .footer {
        /* display: flex; */
        /* justify-content: space-between; */
        /* align-items: center; */
        margin-top: 10px;
        margin-left: 29.5%;
    }

    .pagination-container {
        display: flex;
        align-items: center;
    }

    .pagination-info {
        /* margin-right: 10px; */
    }

    .pagination-links {
        margin-left: 62%;
    }

    /* Add additional styling for the pagination links if needed */
    .pagination-links .arrow {
        display: inline-block;
        padding: 0.25rem 0.5rem;
        margin: 0 0.25rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #333;
        text-decoration: none;
    }

    .pagination-links .arrow:hover {
        background-color: #f5f5f5;
    }
    </style>
@endsection
