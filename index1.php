<?php
include "connection.php"; // Include the file for database connection
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
    <header>
        <h1 style="color: #f9f9f9;">DrenchGamerHub</h1>
    </header>
    <nav>
        <ul>
            <li><a href="peripherals.php">Peripherals</a></li>
            <li><a href="consoles.php">Consoles</a></li>
            <li><a href="games.php">Games</a></li>
            <li><a href="feedback.php">Contact</a></li>
        </ul>
    </nav>
    <section id="main-content">
        <div class="game-card">
            <img src="https://cdn.thewirecutter.com/wp-content/media/2021/05/mechanicalkeyboards-2048px-2x1-0036.jpeg?auto=webp&quality=75&crop=2:1&width=1024&dpr=2">
            <div class="game-info">
                <h2>Mechanical Keyboards</h2>
                <p>Price: Ksh 10,000</p>
            </div>
            <div class="buttons">
                <button onclick="checkGameInfo()">Check Peripheral info</button>
                <button onclick="addToCart()">Add to Cart</button>
                <button onclick="buyGame()">Buy Peripheral</button>
            </div>
        </div>
        <div class="game-card">
        <img src="https://www.ytechb.com/wp-content/uploads/2017/10/1.2-5.jpg" alt="Game Image">
            <div class="game-info">
                <h2>Gaming Mouse</h2>
                <p>Price: Ksh 3,000</p>
            </div>
            <div class="buttons">
                <button onclick="checkGameInfo()">Check Peripheral Info</button>
                <button onclick="addToCart()">Add to Cart</button>
                <button onclick="buyGame()">Buy Peripheral</button>
            </div>
        </div>
        <div class="game-card">
        <img src="https://th.bing.com/th/id/OIP.KzpHi9G0gGOUvCIgxqXzNgHaHa?rs=1&pid=ImgDetMain" alt="Game Image">
        <div class="game-info">
                <h2>Gaming Headset</h2>
                <p>Price: Ksh 6,000</p>
            </div>
            <div class="buttons">
                <button onclick="checkGameInfo()">Check Peripheral Info</button>
                <button onclick="addToCart()">Add to Cart</button>
                <button onclick="buyGame()">Buy Peripheral</button>
            </div>
        </div>
        <div class="game-card">
        <img src="https://th.bing.com/th/id/R.4c9afe4ed82ced98eb2a53d71ec8f254?rik=f2JNBrrFtdi3AQ&pid=ImgRaw&r=0" alt="Game Image">
            <div class="game-info">
                <h2>Gaming Monitors</h2>
                <p>Price: Ksh 60,000</p>
            </div>
            <div class="buttons">
                <button onclick="checkGameInfo()">Check Peripheral Info</button>
                <button onclick="addToCart()">Add to Cart</button>
                <button onclick="buyGame()">Buy Peripheral</button>
            </div>
        </div>
        <div class="game-card">
            <img src="https://cdn.mos.cms.futurecdn.net/8NSbZf4ozst5sSdwfoZtY9.jpg" alt="Game Image">
            <div class="game-info">
                <h2>Gaming chairs</h2>
                <p>Price: Ksh40,999</p>
            </div>
            <div class="buttons">
                <button onclick="checkGameInfo()">Check Peripheral Info</button>
                <button onclick="addToCart()">Add to Cart</button>
                <button onclick="buyGame()">Buy Peripheral</button>
            </div>
        </div>
        <div class="game-card">
            <img src="https://th.bing.com/th/id/OIP.drMZLp7PCDs8V32aj-ljFAHaHa?rs=1&pid=ImgDetMain" alt="Game Image">
            <div class="game-info">
                <h2>Gaming Controllers</h2>
                <p>Price: Ksh 7,000</p>
            </div>
            <div class="buttons">
                <button onclick="checkGameInfo()">Check Peripheral Info</button>
                <button onclick="addToCart()">Add to Cart</button>
                <button onclick="buyGame()">Buy Peripheral</button>
            </div>
        </div>
        <div class="game-card">
            <img src="https://th.bing.com/th/id/OIP.HsSunRG9hBJzVFgZvca41wHaHa?rs=1&pid=ImgDetMain" alt="Game Image">
            <div class="game-info">
                <h2>Gaming Mousepads</h2>
                <p>Price: Ksh 2,000 </p>
            </div>
            <div class="buttons">
                <button onclick="checkGameInfo()">Check Peripheral Info</button>
                <button onclick="addToCart()">Add to Cart</button>
                <button onclick="buyGame()">Buy Peripheral</button>
            </div>
        </div>
        <div class="game-card">
            <img src="https://macrotronics.net/images/gn-gk56-2-large.jpg" alt="Game Image">
            <div class="game-info">
                <h2>Gaming Microphone</h2>
                <p>Price: Ksh 12,000</p>
            </div>
            <div class="buttons">
                <button onclick="checkGameInfo()">Check Game Info</button>
                <button onclick="addToCart()">Add to Cart</button>
                <button onclick="buyGame()">Buy Peripheral</button>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>

