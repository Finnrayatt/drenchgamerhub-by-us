<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrenchGamerHub</title>
    <style>
        body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #020202;
    color: #0a0909;
}

header {
    background-color: #000;
    text-align: center;
    padding: 20px 0;
}

nav {
    background-color: #000;
    padding: 10px 0;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin: 0 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    padding: 10px 20px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

nav ul li a:hover {
    background-color: #00FFD5;
    color: #000;
}

section#main-content {
    padding: 20px;
    text-align: center;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.game-card {
    border: 1px solid #070606;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 20px;
    background-color: #f9f9f9;
    width: calc(33.33% - 40px);
    margin-left: 10px; /* Added margin-left for spacing between cards */
    margin-right: 10px; /* Added margin-right for spacing between cards */
    margin-top: 10px; /* Added margin-top for spacing between rows */
}

.game-card:hover {
    border-color: #00FFD5; /* Change color as needed */
}

.game-card img {
    width: 100%;
    height: 200px; /* Adjust the height as needed */
    object-fit: cover;
    border-radius: 5px;
}

.game-info {
    margin-top: 10px;
}

.buttons {
    margin-top: 10px;
    text-align: center;
}

.buttons button {
    padding: 10px 20px;
    margin-right: 10px; /* Keep existing margin */
    margin-bottom: 10px; /* Add margin-bottom for vertical spacing */
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.buttons button:last-child {
    margin-right: 0; /* Remove margin-right for the last button */
}

.buttons button:hover {
    background-color: #ddd;
}

.logout-btn {
    position: absolute;
    top: 10px;
    left: 10px;
    padding: 10px 20px;
    background-color: #f00;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    z-index: 9999;
}

.logout-btn:hover {
    background-color: #ff5555;
}

        </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1 style="color: #f9f9f9;">DrenchGamerHub</h1>
    </header>
    
    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="peripherals.php">Peripherals</a></li>
            <li><a href="consoles.php">Consoles</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="feedback.php">Contact</a></li>
        </ul>
    </nav>
    
    <!-- Main Content Section -->
    <section id="main-content">
        <!-- PHP code for dynamically fetching peripherals -->
        <?php
        include "connection.php";

        // Fetch peripherals from the database
        $sql = "SELECT * FROM peripherals";
        $result = $connect->query($sql);

        // Check if there are any peripherals
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="game-card">';
                echo '<img src="' . $row["image_url"] . '">';
                echo '<div class="game-info">';
                echo '<h2>' . $row["name"] . '</h2>';
                echo '<p>Price: Ksh ' . $row["price"] . '</p>';
                echo '</div>';
                echo '<div class="buttons">';
                echo '<button onclick="checkGameInfo()">Check Peripheral Info</button>';
                echo '<button onclick="addToCart(\'' . $row['name'] . '\', ' . $row['price'] . ')">Add to Cart</button>';
                echo '<button onclick="buyGame()">Buy Peripheral</button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        $connect->close();
        ?>
    </section>

    <!-- Your JavaScript file -->
    <script src="script.js"></script>
</body>
</html>
