<?php
session_start();

// Check login
if (!isset($_SESSION['username'])) {
    die("Please login first!");
}

// Database connection
$conn = new mysqli("localhost", "root", "", "testdb");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        die("All fields are required!");
    }

    $stmt = $conn->prepare(
        "INSERT INTO signup (name, email, message) VALUES (?, ?, ?)"
    );

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Execute error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
