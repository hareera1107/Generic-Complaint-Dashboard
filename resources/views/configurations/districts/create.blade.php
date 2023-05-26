@extends('layouts.dashboard.app')
@section('content')
<head>
    <title>Add Category</title>
    <style>
        h2 {
            justify-content: center;
            margin-left: 440px;
        }

        .login-form {
            width: 500px;
            margin: 0 auto;
            /* margin-top: 50px; */
            /* background: #fff; */
            padding: 40px;
            box-sizing: border-box;
            border-radius: 20px;
            box-shadow: 0px 0px 50px rgba(5, 5, 5, 0.4);
            margin-bottom: 200px;
        }

        .login-form label {
            display: block;
            margin-bottom: 10px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form textarea,
        .login-form select {
            width: 100%;
            padding: 15px;
            margin-bottom: 30px;
            margin-right: 50px;
            border: lightgray;
            border-radius: 3px;
            box-shadow: 0px 0px 10px rgb(158, 83, 158);
        }

        .login-form button[type="submit"] {
            background: rgb(158, 83, 158);
            width: 100%;
            padding: 15px;
            margin-bottom: 30px;
            margin-right: 50px;
            border: lightgray;
            color: #fff;
            cursor: pointer;
            border-radius: 25px;
        }

        .btn-purple {
            color: #ffffff;
            background-color: #800080;
            border-color: #800080;
        }

        .btn-purple:hover {
            color: #ffffff;
            background-color: #6a006a;
            border-color: #6a006a;
        }
    </style>
</head>

<body>
    <h2>Add District</h2>
    <form action="{{ route('districts.index') }}">
        <button class="btn btn-purple" style="margin-left: 63%; margin-bottom:1ch">Back</button>
    </form>
    <div class="login-form">
        <form method="post" action="{{ route('districts.store') }}">
            @csrf
            <label for="district">District</label>
            <input type="text" id="district" name="district" placeholder="Enter district" required>
            <button type="submit"> Add </button>
        </form>
    </div>
</body>
@endsection