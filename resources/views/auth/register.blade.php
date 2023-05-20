{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
    <title>Login Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('curve1.jpeg');
            background-size: cover;
        }

        .logo {
            text-align: center;
            margin-top: 40px;
        }

        .logo img {
            height: 80px;
        }

        .login-form {
            width: 500px;
            margin: 0 auto;
            margin-top:30px;
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
        .login-form input[type="email"],
        .login-form input[type="password"]{
            width: 95%;
            padding: 15px;
            margin-bottom: 10px;
            /* margin-right: 50px; */
            border: lightgray;
            border-radius: 3px;
            box-shadow: 0px 0px 10px rgb(158, 83, 158);
        }

        .login-form input[type="submit"] {
            background: rgb(158, 83, 158);
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            margin-top: 10px;
            /* margin-right: 50px; */
            border: lightgray;
            box-shadow: 0px 0px 10px rgb(158, 83, 158);
            color: #fff;
            cursor: pointer;
            border-radius: 25px;
        }

        .login-form a {
            color: rgb(158, 83, 158);
        }

    </style>
</head>

<body>
    <div class="logo">
        <img src="{{ asset('images/logo.jpeg') }}">
    </div>
    <div class="login-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Username:</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" placeholder="Enter Username" required autocomplete="name" autofocus>
            
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password">Password:</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                placeholder="Enter password" required autocomplete="new-password">


            <label for="password">Confirm Password:</label>
            <input type="password" id="password" class="form-control" name="password_confirmation" 
                placeholder="Re-enter password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
            @enderror
            <input type="submit" value="Register"></a>

            @if (Route::has('login'))
            <span class="span">Already have account?
                <a class="register" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </span>
            @endif
    </div>
    </form>

    </div>
</body>

</html>
