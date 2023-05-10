@include('layouts.dashboard.app')

<head>
    <title>Add User</title>
    <style>
        h1 {
            justify-content: center;
            margin-left: 500px;
            margin-top: 30px;
        }

        .login-form {
            width: 500px;
            margin: 0 auto;
            margin-top: 10px;
            /* background: #fff; */
            padding: 40px;
            box-sizing: border-box;
            border-radius: 20px;
            box-shadow: 0px 0px 50px rgba(5, 5, 5, 0.4);
        }

        .login-form label {
            display: block;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="email"],
        .login-form textarea {
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
            margin-bottom: 10px;
            margin-top: 20px;
            margin-right: 50px;
            border: lightgray;
            color: #fff;
            cursor: pointer;
            border-radius: 25px;
            font-size: 1.2em;
        }

        .add-button {
            background-color: rgb(158, 83, 158);
        }


    </style>
</head>

<body>
    <h1>Add User</h1>
    <form action="{{ route('users.index') }}">
        <button class="btn add-button" style="margin-left: 62%; margin-bottom:1ch; color:#fff">Back</button>
    </form>
    <div class="login-form">
        <form method="post" action="{{ route('users.store') }}">
            @csrf
            @include('alerts.success')
            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter Name') }}" value="">
                                @include('alerts.feedback', ['field' => 'name'])
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <label>{{ __('Email address') }}</label>
                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="">
                @include('alerts.feedback', ['field' => 'email'])
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                <label>{{ __('Password') }}</label>
                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter Password') }}" value="" required>
                @include('alerts.feedback', ['field' => 'password'])
            </div>
            <button type="submit"> Add </button>
        </form>
    </div>
</body>
