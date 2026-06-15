<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact us</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Include Bootstrap JavaScript (make sure it's after jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<script src="main.js"></script>
<style>


.btn-purchase{
   text-align: center;
   margin: auto;
   padding: 2%;
   width: 50%;
 }

 #shopping-cart{
   padding: 5% 5%;
 }

 .cart-total{
   text-align: right;
   font-size: 1.3rem;
 }

.up-icon{
   color: black;
   position: fixed;
   float: right;
   z-index: 1;
   left: 95%;
   top: 85%;
   font-size: 2rem;
 }

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}


/*navbar*/
.topnav {
    overflow: hidden;
    background-color:black;
  }
  
  
  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 19px 18px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .active {
    background-color: darkblue  ;
    color: white;
  }
  
  .topnav .icon {
    display: none;
  }
  
  .dropdown {
    float: left;
    overflow: hidden;
  }
  
  .dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 19px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .topnav a:hover, .dropdown:hover .dropbtn {
    background-color: #708cfa;
    color: white;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
    color: black;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child), .dropdown .dropbtn {
      display: none;
    }
    .topnav a.icon {
      float: right;
      display: block;
      
    }
  }
  
  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
    .topnav.responsive .dropdown {float: none;}
    .topnav.responsive .dropdown-content {position: relative;}
    .topnav.responsive .dropdown .dropbtn {
      display: block;
      width: 100%;
      text-align: left;
    }
  }

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: darkblue;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #708cfa;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

/*footer*/

.container-footer{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: black;
    padding: 40px 5px;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
   background-color: black;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
  
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #708cfa;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
  
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 50%;
}
}

</style>
</head>
<body>

 <!----navbar-->

 <!-- <div class="topnav" id="myTopnav">
  <a class='active' href='/'>Home</a>
  <div class="dropdown">
      <button class="dropbtn">Offering
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href='/#services'>Services</a>
        <a href='/#bundles'>Bundles</a>
        
        <a href='/#products'>Products</a>
      
      </div>
    </div> 
  <a href='/#team'>Our Team</a>

  
  <a href='/feedback.html'>Feedbacks</a>
  <a href='/contact.html'>Contact us</a>
  <a href='/signup.html'>SignUp/Login</a>-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Author Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">View Authors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>


  <a href="#" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<section class="container content-section" id="shopping-cart">
  
    <h3 style="text-decoration: underline;text-align: center; margin-bottom: 7%;">Shopping Cart</h3>
   
   <table class="table table-hover table-cart">
    <thead>
      <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody class="cart-items">
      
    <?php




// Fetch the cart items from the customerorder table for a specific user
$userEmail = $_SESSION['email'];
$sql = "SELECT * FROM customerorder WHERE Email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$result = $stmt->get_result();

// Loop through the cart items and print their details
while ($item = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $item["Name"] . "</td>";
    echo "<td>" . $item["Cost"] . "$</td>";
    echo "<td><input class='cart-quantity-input' type='number' value='1' style='width: 50px' onchange='updateTotalPrice()'></td>";

    // Add a delete button with onclick event to remove the item from the cart
    echo "<td><button class='btn btn-danger' onclick=\"removeItemFromCart('" . $item["Name"] . "')\">Delete</button></td>";

    echo "</tr>";
}

$stmt->close();


    ?>
<script>
  function updateTotalPrice() {
    // Get all the quantity input fields
    var inputs = document.getElementsByClassName('cart-quantity-input');
    
    // Initialize total price variable
    var totalPrice = 0;
    
    // Loop through the input fields and calculate the total price
    for (var i = 0; i < inputs.length; i++) {
      var quantity = parseInt(inputs[i].value);
      var price = parseFloat(inputs[i].parentNode.previousElementSibling.textContent);
      totalPrice += quantity * price;
    }
    
    // Update the total price container
    var shipping = 20;
    var tota= totalPrice+shipping;
    var TOTAL = document.getElementById("TOTAL");
    var subtotal= document.getElementById("subtotal");
    var totalPriceContainer = document.getElementById("totalPrice");
    totalPriceContainer.textContent = "$" + totalPrice.toFixed(2);
    subtotal.textContent = "$" + totalPrice.toFixed(2);
    TOTAL.textContent="$" + tota.toFixed(2);
    
  }

  // Call the updateTotalPrice() function after the page has finished loading
  function removeItemFromCart(index) {
    // Send an AJAX request to the server to remove the item from the cart
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'remove_item.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      // Check if the request was successful
      if (xhr.status === 200) {
        // Update the total price
        updateTotalPrice();
        
        // Refresh the page to reflect the changes
        location.reload();
      }
    };
    xhr.send('index=' + index);
  }

  // Call the updateTotalPrice() function after the page has finished loading
  window.onload = function() {
    updateTotalPrice();
  };

</script>
    


       
    </tbody>
  </table>
 
 <?php 
  echo"<div class='cart-total'>";
  echo"<strong class='cart-total-title'>Total</strong>";
  echo" <span  class='cart-total-price' id='totalPrice' style='text-align: right;'></span>";
  echo"</div>";
  ?>
      <a href ='clearcart.php'><button id= "clear" class='btn btn-warning'>Clear</button></a>
  <style>
    #clear{
      display: flex;
      justify-content: flex-end;
    
    height: 10vh;
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffc107;
    color: black;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10%;
    
    }
  </style>
   
  
      
      <div class="btn-purchase" style="margin-top: 10%;">
    
      <?php
// Check if the user is logged in
$isLoggedIn = isset($_SESSION["loggedin"]);

// Fetch the cart items from the customerorder table for a specific user
$userEmail = $_SESSION['email'];
$sql = "SELECT * FROM customerorder WHERE Email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$result = $stmt->get_result();
// Check if the cart is empty
if ($result->num_rows === 0) {
  echo '<button type="button" class="btn btn-dark btn-purchase" onclick="showEmptyCartAlert()"><i class="fa-solid fa-cart-shopping" style="margin-right: 6%;"></i>PURCHASE</button>';
} elseif (!$isLoggedIn) {
 echo '<button type="button" class="btn btn-dark btn-purchase" onclick="redirectToLogin()"><i class="fa-solid fa-cart-shopping" style="margin-right: 6%;"></i>PURCHASE</button>';
}
 else {
  echo '<button type="button" class="btn btn-dark btn-purchase" data-bs-toggle="modal" data-bs-target="#paymentModal"><i class="fa-solid fa-cart-shopping" style="margin-right: 6%;"></i>PURCHASE</button>';
}
?>

<script>
  function showEmptyCartAlert() {
    alert("The cart is empty. Please add items to your cart.");
  }

  function redirectToLogin() {
    window.location.href = "login.php"; // Replace "login.php" with the actual URL of your login page
  }
</script>
</div>



<form action="clearcart.php" method="post">
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="paymentModalLabel">Payment</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="container">
                                      <div class="container">
                                          <h1 class="h3 mb-5">Payment</h1>
                                          <div class="row">
                                            <!-- Left -->
                                            <div class="col-lg-9">
                                              <div class="accordion" id="accordionPayment">
                                                <!-- Credit card -->
                                                <div class="accordion-item mb-3">
                                                  <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                                                    <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseCC" aria-expanded="false">
                                                      <input class="form-check-input" type="radio" name="payment" id="payment1">
                                                      <label class="form-check-label pt-1" for="payment1">
                                                        Credit Card
                                                      </label>
                                                    </div>
                                                    <span>
                                                      <svg width="34" height="25" xmlns="http://www.w3.org/2000/svg">
                                                        <g fill-rule="nonzero" fill="#333840">
                                                          <path d="M29.418 2.083c1.16 0 2.101.933 2.101 2.084v16.666c0 1.15-.94 2.084-2.1 2.084H4.202A2.092 2.092 0 0 1 2.1 20.833V4.167c0-1.15.941-2.084 2.102-2.084h25.215ZM4.203 0C1.882 0 0 1.865 0 4.167v16.666C0 23.135 1.882 25 4.203 25h25.215c2.321 0 4.203-1.865 4.203-4.167V4.167C33.62 1.865 31.739 0 29.418 0H4.203Z"></path>
                                                          <path d="M4.203 7.292c0-.576.47-1.042 1.05-1.042h4.203c.58 0 1.05.466 1.05 1.042v2.083c0 .575-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.467-1.05-1.042V7.292Zm0 6.25c0-.576.47-1.042 1.05-1.042H15.76c.58 0 1.05.466 1.05 1.042 0 .575-.47 1.041-1.05 1.041H5.253c-.58 0-1.05-.466-1.05-1.041Zm0 4.166c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.466-1.05-1.042Zm6.303 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.051.466 1.051 1.041 0 .576-.47 1.042-1.05 1.042h-2.102c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Z"></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                  </h2>
                                                  <div id="collapseCC" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment" >
                                                    <div class="accordion-body">
                                                      <div class="mb-3">
                                                        <label class="form-label">Card Number</label>
                                                        <input type="text" class="form-control" placeholder=""  id="cardnum" >
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-lg-6">
                                                          <div class="mb-3">
                                                            <label class="form-label">Name on card</label>
                                                            <input type="text" class="form-control" placeholder="" id="cardname">
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                          <div class="mb-3">
                                                            <label class="form-label">Expiry date</label>
                                                            <input type="text" class="form-control" placeholder="MM/YY" id="cardexp">
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                          <div class="mb-3">
                                                            <label class="form-label">CVV Code</label>
                                                            <input type="password" class="form-control" id="cardcvv">
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!-- PayPal -->
                                                <div class="accordion-item mb-3 border">
                                                  <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                                                    <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePP" aria-expanded="false">
                                                      <input class="form-check-input" type="radio" name="payment" id="payment2">
                                                      <label class="form-check-label pt-1" for="payment2">
                                                        PayPal
                                                      </label>
                                                    </div>
                                                    <span>
                                                      <svg width="103" height="25" xmlns="http://www.w3.org/2000/svg">
                                                        <g fill="none" fill-rule="evenodd">
                                                          <path d="M8.962 5.857h7.018c3.768 0 5.187 1.907 4.967 4.71-.362 4.627-3.159 7.187-6.87 7.187h-1.872c-.51 0-.852.337-.99 1.25l-.795 5.308c-.052.344-.233.543-.505.57h-4.41c-.414 0-.561-.317-.452-1.003L7.74 6.862c.105-.68.478-1.005 1.221-1.005Z" fill="#009EE3"></path>
                                                          <path d="M39.431 5.542c2.368 0 4.553 1.284 4.254 4.485-.363 3.805-2.4 5.91-5.616 5.919h-2.81c-.404 0-.6.33-.705 1.005l-.543 3.455c-.082.522-.35.779-.745.779h-2.614c-.416 0-.561-.267-.469-.863l2.158-13.846c.106-.68.362-.934.827-.934h6.263Zm-4.257 7.413h2.129c1.331-.051 2.215-.973 2.304-2.636.054-1.027-.64-1.763-1.743-1.757l-2.003.009-.687 4.384Zm15.618 7.17c.239-.217.482-.33.447-.062l-.085.642c-.043.335.089.512.4.512h2.323c.391 0 .581-.157.677-.762l1.432-8.982c.072-.451-.039-.672-.38-.672H53.05c-.23 0-.343.128-.402.48l-.095.552c-.049.288-.18.34-.304.05-.433-1.026-1.538-1.486-3.08-1.45-3.581.074-5.996 2.793-6.255 6.279-.2 2.696 1.732 4.813 4.279 4.813 1.848 0 2.674-.543 3.605-1.395l-.007-.005Zm-1.946-1.382c-1.542 0-2.616-1.23-2.393-2.738.223-1.507 1.665-2.737 3.206-2.737 1.542 0 2.616 1.23 2.394 2.737-.223 1.508-1.664 2.738-3.207 2.738Zm11.685-7.971h-2.355c-.486 0-.683.362-.53.808l2.925 8.561-2.868 4.075c-.241.34-.054.65.284.65h2.647a.81.81 0 0 0 .786-.386l8.993-12.898c.277-.397.147-.814-.308-.814H67.6c-.43 0-.602.17-.848.527l-3.75 5.435-1.676-5.447c-.098-.33-.342-.511-.793-.511h-.002Z" fill="#113984"></path>
                                                          <path d="M79.768 5.542c2.368 0 4.553 1.284 4.254 4.485-.363 3.805-2.4 5.91-5.616 5.919h-2.808c-.404 0-.6.33-.705 1.005l-.543 3.455c-.082.522-.35.779-.745.779h-2.614c-.417 0-.562-.267-.47-.863l2.162-13.85c.107-.68.362-.934.828-.934h6.257v.004Zm-4.257 7.413h2.128c1.332-.051 2.216-.973 2.305-2.636.054-1.027-.64-1.763-1.743-1.757l-2.004.009-.686 4.384Zm15.618 7.17c.239-.217.482-.33.447-.062l-.085.642c-.044.335.089.512.4.512h2.323c.391 0 .581-.157.677-.762l1.431-8.982c.073-.451-.038-.672-.38-.672h-2.55c-.23 0-.343.128-.403.48l-.094.552c-.049.288-.181.34-.304.05-.433-1.026-1.538-1.486-3.08-1.45-3.582.074-5.997 2.793-6.256 6.279-.199 2.696 1.732 4.813 4.28 4.813 1.847 0 2.673-.543 3.604-1.395l-.01-.005Zm-1.944-1.382c-1.542 0-2.616-1.23-2.393-2.738.222-1.507 1.665-2.737 3.206-2.737 1.542 0 2.616 1.23 2.393 2.737-.223 1.508-1.665 2.738-3.206 2.738Zm10.712 2.489h-2.681a.317.317 0 0 1-.328-.362l2.355-14.92a.462.462 0 0 1 .445-.363h2.682a.317.317 0 0 1 .327.362l-2.355 14.92a.462.462 0 0 1-.445.367v-.004Z" fill="#009EE3"></path>
                                                          <path d="M4.572 0h7.026c1.978 0 4.326.063 5.895 1.45 1.049.925 1.6 2.398 1.473 3.985-.432 5.364-3.64 8.37-7.944 8.37H7.558c-.59 0-.98.39-1.147 1.449l-.967 6.159c-.064.399-.236.634-.544.663H.565c-.48 0-.65-.362-.525-1.163L3.156 1.17C3.28.377 3.717 0 4.572 0Z" fill="#113984"></path>
                                                          <path d="m6.513 14.629 1.226-7.767c.107-.68.48-1.007 1.223-1.007h7.018c1.161 0 2.102.181 2.837.516-.705 4.776-3.793 7.428-7.837 7.428H7.522c-.464.002-.805.234-1.01.83Z" fill="#172C70"></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                  </h2>
                                                  <div id="collapsePP" class="accordion-collapse collapse" data-bs-parent="#accordionPayment" >
                                                    <div class="accordion-body">
                                                      <div class="px-2 col-lg-6 mb-3">
                                                        <label class="form-label">Email address</label>
                                                        <input type="email" class="form-control" id="email">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Right -->
                                            <div class="col-lg-3">
                                              <div class="card position-sticky top-0">
                                                <div class="p-3 bg-light bg-opacity-10">
                                                  <h6 class="card-title mb-3">Order Summary</h6>
                                                  <div class="d-flex justify-content-between mb-1 small">
                                                    <span>Subtotal</span> <span id="subtotal"></span>
                                                  </div>
                                                  <div class="d-flex justify-content-between mb-1 small">
                                                    <span>Shipping</span> <span id="shipping">$20.00</span>
                                                  </div>
                                              
                                                  <hr>
                                                  <div class="d-flex justify-content-between mb-4 small">
                                                    <span>TOTAL</span> <strong class="text-dark" id="TOTAL"></strong>
                                                  </div>
                                                  <div class="form-check mb-1 small">
                                                    <input class="form-check-input" type="checkbox" value="" id="tnc">
                                                    <label class="form-check-label" for="tnc">
                                                      I agree to the <a href="#">terms and conditions</a>
                                                    </label>
                                                  </div>
                                                  <div class="form-check mb-3 small">
                                                    <input class="form-check-input" type="checkbox" value="" id="subscribe">
                                                    <label class="form-check-label" for="subscribe">
                                                      Get emails about product updates and events. If you change your mind, you can unsubscribe at any time. <a href="#">Privacy Policy</a>
                                                    </label>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                  </div>
                          <button type="submit" class="btn btn-primary w-100 mt-2" name="place_order">Place order</button>
                      </div>
                    
<script>

document.querySelector('form').addEventListener('submit', function(event) {
    
    var paymentMethod = document.querySelector('input[name="payment"]:checked');
    if (!paymentMethod) {
        alert("Please choose a payment method");
        event.preventDefault(); // Prevent form submission
    } else {
        if (paymentMethod.id === 'payment1') { // Credit Card
            var cardNumInput = document.getElementById('cardnum');
            var cardNameInput = document.getElementById('cardname');
            var cardExpInput = document.getElementById('cardexp');
            var cardCvvInput = document.getElementById('cardcvv');

            if (!cardNumInput.value || !cardNameInput.value || !cardExpInput.value || !cardCvvInput.value) {
                alert("Please fill in all credit card details");
                event.preventDefault(); // Prevent form submission
            } else {
                // Validate card number
                if (!isValidCardNumber(cardNumInput.value)) {
                    alert("Please enter a valid card number (16 digits)");
                    event.preventDefault(); // Prevent form submission
                }

                // Validate card name
                else if (!isValidCardName(cardNameInput.value)) {
                    alert("Please enter a valid card name");
                    event.preventDefault(); // Prevent form submission
                }

                // Validate expiry date
                else if (!isValidExpiryDate(cardExpInput.value)) {
                    alert("Please enter a valid expiry date (MM/YY)");
                    event.preventDefault(); // Prevent form submission
                }

                // Validate CVV
                else if (!isValidCVV(cardCvvInput.value)) {
                    alert("Please enter a valid CVV (3 digits)");
                    event.preventDefault(); // Prevent form submission
                }
            }
        } else if (paymentMethod.id === 'payment2') { // PayPal
            var emailInput = document.getElementById('email');
            if (!emailInput.value) {
                alert("Please enter your PayPal email");
                event.preventDefault(); // Prevent form submission
            } else if (!isValidEmail(emailInput.value)) {
                alert("Please enter a valid email address");
                event.preventDefault(); // Prevent form submission
            }
        }
        var privacyCheckbox = document.getElementById('tnc');
        if (!privacyCheckbox.checked) {
            alert("Please agree to the terms and conditions");
            event.preventDefault(); // Prevent form submission
        }
        if (!event.defaultPrevented) {
            displaySuccessMessage();
            
            

        }
    }

});



function displaySuccessMessage() {
    // You can customize the success message as needed
    alert("Purchase successful!");
    $_SESSION['purchaseSuccessful'];
}
// Cardholder name validation function
// Credit card validation functions
function isValidCardNumber(cardNumber) {
    var cardNumberRegex = /^\d{16}$/;
    if (!cardNumberRegex.test(cardNumber)) {
        return false;
    }
    return true;
}

function isValidCardName(cardName) {
    var cardNameRegex = /^[a-zA-Z ]+$/;
    if (!cardNameRegex.test(cardName)) {
        return false;
    }
    return true;
}

function isValidExpiryDate(expiryDate) {
    var expiryDateRegex = /^(0[1-9]|1[0-2])\/(2[4-9]|3[0-9])$/;
    if (!expiryDateRegex.test(expiryDate)) {
        return false;
    }

    var today = new Date();
    var currentYear = today.getFullYear() % 100;
    var currentMonth = today.getMonth() + 1;

    var [month, year] = expiryDate.split('/');
    var expiryYear = parseInt(year);
    var expiryMonth = parseInt(month);

    if (expiryYear < currentYear || (expiryYear === currentYear && expiryMonth < currentMonth)) {
        
        alert("The card is expired. Please enter a valid expiry date.");
        return false;
    }

    return true;
}

function isValidCVV(cvv) {
    var cvvRegex = /^\d{3}$/;
    if (!cvvRegex.test(cvv)) {
        
        return false;
    }
    return true;
}

// PayPal email validation function
function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        
        return false;
    }
    return true;
}


                        </script>

    </div>
</form>

                  
                    <style>body{
                        background:#eee;
                    }
                    
                    .card {
                        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
                    }
                    
                    .card {
                        position: relative;
                        display: flex;
                        flex-direction: column;
                        min-width: 0;
                        word-wrap: break-word;
                        background-color: #fff;
                        background-clip: border-box;
                        border: 0 solid rgba(0,0,0,.125);
                        border-radius: 1rem;
                    }
                    
                    .card-body {
                        -webkit-box-flex: 1;
                        -ms-flex: 1 1 auto;
                        flex: 1 1 auto;
                        padding: 1.5rem 1.5rem;
                    }</style>
                </div>
                
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-DbmzuH+pARX+D6GMbwxkEJUK5qseabH/jMfjqxPdwiqvFg97sOCgguHEQm+7chXf" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
  </section>

<!--footer-->

<footer class="footer">
  <div class="container-footer">
      <div class="row">
          <div class="footer-col">
              <h4>Company</h4>
              <ul>
                  <li><a href="aboutus.html">about us</a></li>
                  <li><a href='/#Services'>our services</a></li>
                  <li><a href="#">privacy policy</a></li>
                  <li><a href='/contact.html'>Contact Us</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h4>Get help</h4>
              <ul>
                  <li><a href='/database'>FAQ</a></li>
             
                  <li><a href="#">returns</a></li>
                  <li><a href="#">order status</a></li>
                  <li><a href="#">payment options</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h4>Digital marektig</h4>
              <ul>
                  <li><a href="#">ADS</a></li>
                  <li><a href="#">Boost</a></li>
                  <li><a href="#">Brands</a></li>
                  <li><a href="#">Logos</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h4>Follow us</h4>
              <div class="social-links">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                
              </div>
          
          </div>
      </div>
  </div>
</footer>
  


<script>
  //navbar
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</body>
</html>
