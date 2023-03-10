<?php

// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "confessions";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the message from the form
    $message = $_POST["message"];

    // Insert the message into the "confessions" table
    $sql = "INSERT INTO confessions (message) VALUES ('$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message inserted successfully Go to home page <a href='./index.php'>Click me</a>";
    } else {
        echo "Error inserting message: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);

?>
