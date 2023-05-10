@extends('layouts.dashboard.app')
@section('content')

    <h1>All Users</h1>
    <form action="{{ route('users.create') }}">
        <button class="btn add-button" style="margin-left: 80%; margin-bottom:1ch" >Add user</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}"
                        method="Post">
                        <a class="btn btn-sm btn-success"
                            href="{{ route('users.edit', $user->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <style>
        
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            /* margin: 0 auto; */
            color: rgb(20, 19, 19);
            margin-left: 500px;
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
            margin-left: 500px;
            margin-top: 100px;
            margin-bottom: 30px;
        }

        .add-button{
            background-color: rgb(158, 83, 158);
        }
    </style>
@endsection



