<?php
// Start the session
session_start();

//Get the user Email from the session
$userEmail=$_SESSION['email'];

// Retrieve the author ID from the URL parameter
$serviceID = $_GET['id'];

// Perform a query using the author ID
include('config.php'); // Include the database connection configuration
$query = "SELECT * FROM services WHERE id = $serviceID";
$result = mysqli_query($conn, $query);



while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['Name'];
    $cost = $row['Cost'];
    $desc = $row['Description'];
    } 
    // Check if the item already exists in the cart
$q="SELECT * FROM customerorder WHERE Name = '$name'  AND Email = '$userEmail'";
$res=mysqli_query($conn, $q);
if ($result->num_rows > 0) {
    // Display an error message if the item already exists in the cart
    $errorMessage = 'Item is already in the cart.';
}
else{
    // Prepare the INSERT query
$query = "INSERT INTO customerorder (Name, Date, Cost, Email) VALUES (?, CURRENT_TIMESTAMP, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sds", $name, $cost, $userEmail);
// Execute the INSERT query
if ($stmt->execute()) {
    echo "The product has been successfully added to the order for the user.";
} else {
    echo "Error inserting the product into the order.";
}
$stmt->close();
}
    
// Close the database connection
mysqli_close($conn);


// Redirect to the "cart" page
header("Location: index.php?error=" . urlencode($errorMessage));
exit;
?>
