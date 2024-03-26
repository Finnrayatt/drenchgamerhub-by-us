<?php
// Start the session
$server_name = "localhost"; 
$server_user = "root";
$password ="";
$dbname = "web_group";
$connect = mysqli_connect($server_name,$server_user,$password,$dbname);
include "login_process.php";
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set and not empty
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        // Check if username and password are correct (replace this with your authentication logic)
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Example authentication logic (replace with your own)
        if ($username === "example_user" && $password === "example_password") {
            // Authentication successful
            // Set session variables
            $_SESSION["username"] = $username;
            
            // Redirect to user profile or any other page
            header("Location: user_profile.php");
            exit();
        } else {
            // Authentication failed
            // Redirect back to login page with error message
            header("Location: login.php?error=invalid_credentials");
            exit();
        }
    } else {
        // Required fields not provided
        // Redirect back to login page with error message
        header("Location: login.php?error=missing_fields");
        exit();
    }
} else {
    // Redirect back to login page
    header("Location: login.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login_process.php" method="post">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
</body>
</html>