<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_website";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Data saved successfully!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
