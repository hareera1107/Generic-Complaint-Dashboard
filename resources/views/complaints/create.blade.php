@include('layouts.dashboard.app')

<head>
    <title>Login Form</title>
    <style>
        
        .login-form {
            width: 500px;
            margin: 0 auto;
            margin-top: 50px;
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
        .login-form textarea {
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
        
    </style>
</head>
<body>
    <div class="login-form">
        <form method="post" action="{{ route('complaints.store') }}" >
            @csrf
            <label for="category">Category</label>
            <input type="text" id="category" name="category" placeholder="Enter category" required>

            <label for="district">District</label>
            <input type="text" id="district" name="district" placeholder="Enter district" required>
            <label for="text-area">Complaint</label>
            <textarea id="complaint" name="complaint" placeholder="Enter complaint" required> </textarea>
            <button type="submit"> Submit </button>
        </form>
    </div>
</body>