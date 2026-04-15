<?php
include 'db_connect.php'; // Include your connection file

// Get data from the request
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // ALWAYS hash passwords!

// Insert into database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "message" => "Registration successful"]);
} else {
    echo json_encode(["status" => "error", "message" => "Error: " . $conn->error]);
}
?>
