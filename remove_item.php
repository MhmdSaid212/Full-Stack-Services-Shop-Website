<?php
session_start();
include "config.php";

// Get the user Email from the session
$userEmail = $_SESSION['email'];
$itemname = $_GET['name'];

// Prepare the DELETE query
$sql = "DELETE FROM `customerorder` WHERE `Name` = ? AND Email = ?";
$stmt = $conn->prepare($sql);

// Bind the parameter values
$stmt->bind_param("ss", $itemname, $userEmail);

// Execute the DELETE query
if ($stmt->execute()) {
    // Redirect back to the cart page with a success message
    header("Location: cart.php?name=" . urlencode($itemname) . "&success=true");
    exit();
} else {
    // Redirect back to the cart page with an error message
    header("Location: cart.php?name=" . urlencode($itemname) . "&success=false");
    exit();
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
