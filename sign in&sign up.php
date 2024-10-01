<?php
    $d = mysqli_connect('localhost','root','','revision300');
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    

        $sql = "INSERT INTO student(username,password) VALUES('$username','$passward')";
        $result = mysqli_query($d,$sql);
        if ($result) {
            echo "Successfull Saved";
        }else{
            echo "Data not saved";
        }
    } 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Transfer Management System</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
            background-color: #f7f7f7;
        }

        /* Navigation Bar */
        nav {
            background-color: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        nav .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        nav .nav-links {
            list-style: none;
            display: flex;
        }

        nav .nav-links li {
            margin-left: 20px;
        }

        nav .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav .nav-links a:hover {
            color: #f39c12;
        }

        /* Form Section */
        .form-section {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .form-section h1 {
            margin-bottom: 20px;
            font-size: 2em;
            text-align: center;
        }

        .form-section label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-section input[type="text"],
        .form-section input[type="password"],
        .form-section input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        .form-section button {
            background-color: #f39c12;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            transition: background-color 0.3s;
        }

        .form-section button:hover {
            background-color: #e67e22;
        }

        .form-section .switch-link {
            text-align: center;
            margin-top: 10px;
        }

        .form-section .switch-link a {
            color: #f39c12;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .form-section .switch-link a:hover {
            text-decoration: underline;
        }

        /* Toggle Visibility */
        .form-section .signup-form {
            display: none;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">VehicleTransfer</div>
        <ul class="nav-links">
            <li><a href="home.html">Home</a></li>
            <li><a href="car listings.html">Car Listings</a></li>
            <li><a href="transfer process.html">Transfer Process</a></li>
            <li><a href="support team.html">Support Team</a></li>
            <li><a href="sign in&sign up.html">Login</a></li>
        </ul>
    </nav>

    <!-- Form Section -->
    <section class="form-section">
        <!-- Sign In Form -->
        <div class="signin-form">
            <h1>Sign In</h1>
            <form>
                <label for="signin-username">Username:</label>
                <input type="text" id="signin-username" name="username" required>

                <label for="signin-password">Password:</label>
                <input type="password" id="signin-password" name="password" required>

                <button type="submit">Sign In</button>
            </form>

            <div class="switch-link">
                <p>Don't have an account? <a id="switch-to-signup">Sign Up</a></p>
            </div>
        </div>

        <!-- Sign Up Form -->
        <div class="signup-form">
            <h1>Sign Up</h1>
            <form>
                <label for="signup-username">Username:</label>
                <input type="text" id="signup-username" name="username" required>

                <label for="signup-email">Email:</label>
                <input type="email" id="signup-email" name="email" required>

                <label for="signup-password">Password:</label>
                <input type="password" id="signup-password" name="password" required>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <button type="submit">Sign Up</button>
            </form>

            <div class="switch-link">
                <p>Already have an account? <a id="switch-to-signin">Sign In</a></p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 VehicleTransfer. All rights reserved.</p>
    </footer>
</body>
</html>
