<?php  //cart.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
} 
$rating=number_format($_GET['rating']);
$comments=$_GET['comments'];
//echo $rating;


// Create connection
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO SMM_Customers_ratings (customer_id, rating, comments) 
		VALUES (NULL,'$rating','$comments')";
//	echo "<br>". $sql. "<br>";
//$result = $dbcnx->query($sql);

//echo "Thank you for ordering with us!<br><br> 	Check your email for your order:<br>";
					
header("refresh:0;url=index.html");

$conn->close();
?>