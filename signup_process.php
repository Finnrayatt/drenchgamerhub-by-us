<?php
include "connection.php";
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username, email, and password are set and not empty
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        // Validate email format (you can add more validation)
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            // Invalid email format
            // Redirect back to signup page with error message
            header("Location: signup.php?error=invalid_email");
            exit();
        }
        
        // Perform database operations to store user data (replace with your database code)
        // Here, you would typically hash the password before storing it in the database
        // Example:
        // $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // After successfully storing user data, you can redirect to login page or any other page
        // For demonstration, we will redirect to login page
        header("Location: login.php");
        exit();
    } else {
        // Required fields not provided
        // Redirect back to signup page with error message
        header("Location: signup.php?error=missing_fields");
        exit();
    }
} else {
    // Redirect back to signup page
    header("Location: signup.php");
    exit();
}
?>
