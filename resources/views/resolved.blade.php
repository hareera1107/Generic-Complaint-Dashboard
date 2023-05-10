<!DOCTYPE html>
<html>

<head>
    <title>Complaints Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            font-size: 16px;
            font-family: arial, sans-serif;
        }
        
        body {
            background-image: url('curve1.jpeg');
            /* background-size: cover; */
        }
        
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 250px;
            box-shadow: 0px 1px 30px rgb(73, 41, 73);
            border-radius: 10px;
            border-color: gray;
            margin-left: 20px;
        }
        
        .profile {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }
        
        .profile img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        
        .profile .name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .profile .email {
            font-size: 16px;
            color: rgb(12, 12, 12);
            margin-bottom: 20px;
        }
        
        .menu {
            padding: 10px;
        }
        
        .menu ul {
            list-style: none;
        }
        
        .menu li a {
            display: block;
            padding: 10px 0px;
            font-size: 16px;
            color: rgb(12, 12, 12);
            text-decoration: none;
            border-bottom: 1px solid #eee;
        }
        
        .menu li a:hover {
            background-color: rgb(223, 178, 223)
        }
        
        nav {
            height: 50px;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: right;
            margin-right: 250px;
        }
        
        nav ul li a {
            display: block;
            color: rgb(22, 22, 22);
            padding: 0 20px;
            line-height: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-family: 'Times New Roman', Times, serif;
        }
        
        nav ul li a:hover {
            background-color: rgb(223, 178, 223);
            ;
            border-radius: 20px;
        }
        
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
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="profile">
            <img src="logo.png">
            <div class="name">Naima muskan</div>
            <div class="email">naimakhan1709@gmail.com</div>
        </div>
        <div class="menu">
            <ul>
                <!-- <li><a href="#">Pending Complaint</a></li>
                <li><a href="#">Complete Complaint</a></li>
                <li><a href="#">In Progress Complaint</a></li> -->
                <li><a href="#">Home</a></li>
                <li><a href="reports.html">Charts</a></li>
                <li><a href="#">Reports</a></li>

                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
    <h1>Resolved Complaints</h1>
    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>District</th>
                <th>Complaint</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Water Supply</td>
                <td>XYZ District</td>
                <td>Lack of water</td>
                <td>02/01/2021</td>
            </tr>
            <tr>
                <td>Roads</td>
                <td>PQR District</td>
                <td>Potholes on the road</td>
                <td>03/01/2021</td>
            </tr>
            <tr>
                <td>Garbage</td>
                <td>MNO District</td>
                <td>Unattended garbage dump</td>
                <td>04/01/2021</td>
            </tr>
            <tr>
                <td>Water Supply</td>
                <td>XYZ District</td>
                <td>Lack of water</td>
                <td>02/01/2021</td>
            </tr>
            <tr>
                <td>Water Supply</td>
                <td>XYZ District</td>
                <td>Lack of water</td>
                <td>02/01/2021</td>
            </tr>
            <tr>
                <td>Water Supply</td>
                <td>XYZ District</td>
                <td>Lack of water</td>
                <td>02/01/2021</td>
            </tr>
            <tr>
                <td>Water Supply</td>
                <td>XYZ District</td>
                <td>Lack of water</td>
                <td>02/01/2021</td>
            </tr>
            <tr>
                <td>Water Supply</td>
                <td>XYZ District</td>
                <td>Lack of water</td>
                <td>02/01/2021</td>
            </tr>
            <tr>
                <td>Water Supply</td>
                <td>XYZ District</td>
                <td>Lack of water</td>
                <td>02/01/2021</td>
            </tr>
        </tbody>
    </table>
</body>

</html>