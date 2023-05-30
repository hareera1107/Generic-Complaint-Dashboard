@include('layouts.dashboard.app')

<head>
    <title>Login Form</title>
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
            margin-top: 10px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="date"],
        .login-form textarea,
        .login-form select {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
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
    <h2>Edit Complaint</h2>
    <form action="{{ route('complaints.index') }}">
        <button class="btn btn-purple" style="margin-left: 63%; margin-bottom:1ch">Back</button>
    </form>
    <div class="login-form">
        <form method="post" action="{{ route('complaints.update', $complaint->id) }}">
            @csrf
            @method('put')
            
            <label for="category">Category</label>
            <select name="category" id="category">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $complaint->category == $category ? 'selected' : '' }}>
                        {{ $category->category }}</option>
                @endforeach
            </select>
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="district">District</label>
            <select name="district" id="district">
                <option value="">Select District</option>
                @foreach ($districts as $district)
                    <option value="{{ $district->id }}" {{ $complaint->district == $district ? 'selected' : '' }}>
                        {{ $district->district }}</option>
                @endforeach
            </select>
            @error('district')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="text-area">Complaint</label>
            <textarea id="complaint" name="complaint" placeholder="Enter complaint"> {{ $complaint->complaint }} </textarea>
            @error('complaint')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="registration_date">Registration Date</label>
            <input type="date" id="registration_date" name="registration_date" value="{{ $complaint->registration_date }}">
            @error('registration_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit"> Submit </button>
    </div>
    </form>
    </div>
</body>
