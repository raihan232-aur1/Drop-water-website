<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default for local servers
$password = "";     // Default for local servers
$dbname = "drop_water_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST['customer_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$qty = $_POST['quantity'];
$type = $_POST['item_type'];
$addons = $_POST['add_ons'];

// Insert into Database
$sql = "INSERT INTO orders (customer_name, phone, email, quantity, item_type, add_ons)
        VALUES ('$name', '$phone', '$email', '$qty', '$type', '$addons')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Order Received!</h1><p>Thank you, $name. We will hydrate you soon.</p>";
    echo "<a href='index.html'>Back to Home</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
