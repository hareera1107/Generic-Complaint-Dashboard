<!DOCTYPE html>
<html>

<head>
    <title>Update Profile</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-image: url('curve1.jpeg');
            background-size: cover;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
        }
        
        label {
            margin-top: 20px;
            font-weight: bold;
            margin-right: 200px;
            display: block;
        }
        
        input[type="file"] {
            margin-top: 10px;
            margin-right: 60px;
        }
        
        button {
            margin-top: 30px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: rgb(134, 69, 134);
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        
        button:hover {
            background-color: rgb(128, 98, 128);
        }
        
        input[type="text"] {
            width: 20%;
            padding: 10px;
            margin-top: 30px;
            margin-right: 50px;
            border: lightgray;
            border-radius: 3px;
            box-shadow: 0px 0px 10px rgb(158, 83, 158);
        }
        
        h1 {
            margin-right: 1000px;
        }
    </style>
</head>

<body>

    <form>
        <h1>Update Your Profile</h1>
        <label for="name">Enter New Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
        <label for="picture">Profile Picture:</label>
        <input type="file" id="picture" name="picture">
        <button type="submit" onclick="updateProfile()">Update Profile</button>
    </form>
    <script>
        function updateProfile() {
            // Get input values
            var name = document.getElementById("name").value;
            var picture = document.getElementById("picture").value;
            // Perform validation
            if (name == "") {
                alert("Please enter your name.");
                return false;
            }
            if (picture == "") {
                alert("Please select a profile picture.");
                return false;
            }
            // Perform update
            alert("Profile updated successfully!");
            return true;
        }
    </script>
</body>

</html>

</html>