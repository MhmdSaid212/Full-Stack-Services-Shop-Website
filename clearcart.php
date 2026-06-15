<?php
session_start();
include "config.php";

// Get the user Email from the session
$userEmail = $_SESSION['email'];

// Prepare the DELETE query
$sql = "DELETE FROM `customerorder` WHERE Email = ?";
$stmt = $conn->prepare($sql);

// Bind the parameter value
$stmt->bind_param("s", $userEmail);

// Execute the DELETE query
if ($stmt->execute()) {
    echo "Cart Cleared.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
