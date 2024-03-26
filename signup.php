<?php
$server_name = "localhost"; 
$server_user = "root";
$password ="";
$dbname = "web_group";
$connect = mysqli_connect($server_name,$server_user,$password,$dbname);

function signup() {
    global $connect; // Use the global database connection variable

    // Check if form fields are set and not empty
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["confirm_password"]) && !empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["confirm_password"])) {
        // Retrieve form data
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Validate passwords match
        if ($password === $confirm_password) {
            // Passwords match, proceed with signup process
            // For security, consider using prepared statements to prevent SQL injection
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
            $result = mysqli_query($connect, $sql); // Execute the query

            if ($result) {
                // Redirect to login page after successful signup
                header("Location: index1.php");
                exit;
            } else {
                echo "<p>Error: " . mysqli_error($connect) . "</p>"; // Display error message
            }
        } else {
            // Passwords do not match
            echo "<p>Passwords do not match.</p>";
        }
    } else {
        // Form fields are not set or empty
        echo "<p>Please fill in all fields.</p>";
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Call the signup function to handle form submission
    signup();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Universe - Sign Up</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #020202;
            color: #fff;
        }

        header {
            background-color: #000;
            text-align: center;
            padding: 20px 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
            margin-top: 50px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #00FFD5;
            color: #000;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #00ccaa;
        }

        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Gaming Universe</h1>
    </header>
    <form action="signup.php" method="post">
        <h2>Sign Up</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" value="Sign Up">
    </form>
    <footer>
        <p>&copy; 2024 Gaming Universe. All rights reserved.</p>
    </footer>
</body>
</html>
