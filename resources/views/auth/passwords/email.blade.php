{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('curve1.jpeg');
            background-size: cover;
        }
        
        form {
            width: 500px;
            margin: auto;
            margin-top: 40px;
            padding: 50px;
            text-align: center;
            box-shadow: 0 2px 20px #ccc;
            height: 200px;
        }
        
        h1 {
            font-size: 36px;
            /* margin-bottom: 10px; */
            text-align: center;
            margin-top: 100px;
        }
        
        input[type="email"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 30px;
            margin-right: 50px;
            border: lightgray;
            border-radius: 3px;
            box-shadow: 0px 0px 5px rgb(158, 83, 158);
            /* width: 100%;
            padding: 15px;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
            margin-right: 40px;
            border-color: black;
            color: #ccc; */
        }
        
        input[type="submit"] {
            background-color: rgb(100, 59, 100);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .h4 {
            margin-bottom: 10px;
        }
        
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Did you forget your password?
    </h1>
    <p>Enter your Email Address you're using for your account below to reset your password</p>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <h4>Enter Your Email Address</h4>

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <br>
        <input type="submit" value="Send Password Reset Link">
    </form>
</body>

</html>
