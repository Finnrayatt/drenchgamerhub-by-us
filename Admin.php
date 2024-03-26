<?php
// Include the connection file for database connection
include "connection.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $category = $_POST['category'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    // Prepare and execute SQL query to insert new item into the corresponding table
    switch ($category) {
        case "games":
            $table = "games";
            break;
        case "consoles":
            $table = "consoles";
            break;
        case "peripherals":
            $table = "peripherals";
            break;
        default:
            $table = ""; // Handle invalid category
            break;
    }

    if ($table) {
        $sql = "INSERT INTO $table (name, price, image_url) VALUES ('$name', '$price', '$image_url')";
        if ($connect->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    } else {
        echo "Invalid category";
    }
}

// Close the database connection
$connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h2>Add New Item</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="games">Games</option>
            <option value="consoles">Consoles</option>
            <option value="peripherals">Peripherals</option>
        </select><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br><br>
        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" required><br><br>
        <input type="submit" value="Add Item">
    </form>
</body>
</html>
