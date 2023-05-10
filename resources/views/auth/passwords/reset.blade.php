{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
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
            margin-top: 50px;
            padding: 50px;
            text-align: center;
            box-shadow: 0 2px 20px #ccc;
            height: 370px;
            margin-bottom: 200px;
        }

        h1 {
            font-size: 36px;
            /* margin-bottom: 10px; */
            text-align: center;
            margin-top: 100px;
        }
        .login-form label {
            display: block;
            margin-bottom: 10px;
        }

        .login-form input[type="email"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 30px;
            margin-right: 50px;
            border: lightgray;
            border-radius: 3px;
            box-shadow: 0px 0px 5px rgb(158, 83, 158);
        }

        .login-form input[type="Password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 30px;
            margin-right: 50px;
            border: lightgray;
            border-radius: 3px;
            box-shadow: 0px 0px 5px rgb(158, 83, 158);
        }

        .login-form input[type="ConfirmPassword"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 30px;
            margin-right: 50px;
            border: lightgray;
            border-radius: 3px;
            box-shadow: 0px 0px 5px rgb(158, 83, 158);
        }

        .login-form input[type="submit"] {
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
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>New Password</h1>
    <div class="login-form">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <label for="email">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="password">{{ __('Password') }}</label>

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="new-password">
        <br>
        <label for="password-confirm">{{ __('Confirm Password') }}</label>

        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
            autocomplete="new-password">
        <br>
        <input type="submit" value="Reset Password">
    </form></div>
</body>

</html>
