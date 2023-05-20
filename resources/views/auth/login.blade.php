{{-- @extends('layouts.app') --}}
{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
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
            margin-top: 30px;
            /* background: #fff; */
            padding: 40px;
            padding-right: 60px;
            /* padding-left: 40px;
            padding-left: 40px; */
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
        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            margin-right: 50px;
            border: lightgray;
            border-radius: 3px;
            box-shadow: 0px 0px 10px rgb(158, 83, 158);
        }

        .login-form input[type="submit"] {
            width: 105%;
            padding: 15px;
            margin-bottom: 10px;
            margin-left: 5px;
            /* margin-right: 50px; */
            border: lightgray;
            box-shadow: 0px 0px 10px rgb(158, 83, 158);
            background: rgb(158, 83, 158);
            color: #fff;
            cursor: pointer;
            border-radius: 25px;
        }

        .forgot {
            display: block;
            text-align: right;
            margin-bottom: 10px;
            margin-top: 10px;
            color: rgb(158, 83, 158);
        }
        .span{
            margin-left: 10px;
        }

        .register{
            color: rgb(158, 83, 158);
        }
    </style>
</head>

<body>
    <div class="logo">
        <img src="{{ asset('images/logo.jpeg') }}">
    </div>
    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- <label for="name">Username:</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" placeholder="Enter Username" required autocomplete="name" autofocus>
            @include('alerts.feedback', ['field' => 'name'])
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
            @enderror --}}

            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email" autofocus>
            @include('alerts.feedback', ['field' => 'email'])
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
            @enderror

            <label for="password">Password:</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"
                placeholder="Enter password" required autocomplete="current-password">
                @include('alerts.feedback', ['field' => 'password'])
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
            @enderror

            @if (Route::has('password.request'))
                <a class="forgot" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

            <input type="submit" value="Login"></a>

            @if (Route::has('register'))
            <span class="span">Don't have account?
                <a class="register" href="{{ route('register') }}">
                    {{ __('Register now!') }}
                </a>
            </span>
            @endif
    </div>
    </form>

    </div>
</body>

</html>
