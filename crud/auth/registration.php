<?php
include("../../config/db_connection.php");

if(isset($_POST['registerBtn'])){
    $nameFieldValue = $_POST['nameField'];
    $emailFieldValue = $_POST['emailField'];
    $passwordFieldValue = $_POST['passwordField'];

    $insert_query = "INSERT INTO users(name, email, password) VALUES('$nameFieldValue', '$emailFieldValue', '$passwordFieldValue')";

    $result = mysqli_query($connection, $insert_query);

    echo "<script>alert('User Registered SUccessfully')</script>";

    // header("location: login.php");
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Yourself</title>
    <style>
        /* Basic Reset and Font */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form Container */
        form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        form h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        /* Labels and Inputs */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; /* Ensures padding doesn't affect width */
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #4A90E2;
            outline: none;
        }

        /* Button Styling */
        button {
            width: 100%;
            padding: 12px;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #357ABD;
        }
    </style>
</head>

<body>

    <form method="POST">
        <h2>Create Account</h2>

        <label for="name">Name</label>
        <input type="text" id="name" name="nameField" placeholder="Enter your full name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="emailField" placeholder="example@mail.com" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="passwordField" placeholder="Create a password" required>

        <p style="text-align: center;">Already Registered? <a href="login.php">Login</a></p>

        <button name="registerBtn">Register Now</button>
    </form>

</body>

</html>