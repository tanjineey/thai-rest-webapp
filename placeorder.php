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
?>


<?php	
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$postalcode=$_POST['postalcode'];


// Create connection
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO SMM_Customers (customer_id, name, email, address, postalcode) 
		VALUES (NULL,'$name', '$email', '$address', '$postalcode')";

include_once ("checkout.php");
					

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
 // echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


$counts = array_count_values($_SESSION['cart']);
//var_dump($_SESSION['cart']);
//echo $counts[1];
$foodid1qty = $counts[0];
$foodid2qty = $counts[1];
$foodid3qty = $counts[2];
$foodid4qty = $counts[3];
$foodid5qty = $counts[4];
$foodid6qty = $counts[5];
$foodid7qty = $counts[6];
$foodid8qty = $counts[7];
$foodid9qty = $counts[8];
$foodid10qty = $counts[9];
$foodid11qty = $counts[10];
$foodid12qty = $counts[11];
$foodid13qty = $counts[12];
$foodid14qty = $counts[13];
$foodid15qty = $counts[14];
$foodid16qty = $counts[15];
$foodid17qty = $counts[16];
$foodid18qty = $counts[17];

if ($foodid1qty > 0) {
	//echo $last_id;
	updateOrderTable(1, $foodid1qty, ($foodid1qty*getCurrentPrice(1)), $last_id );
	$foodid1Total = number_format($foodid1qty * getCurrentPrice(1),2);
	
}
if ($foodid2qty > 0) {
	updateOrderTable(2, $foodid2qty, ($foodid2qty*getCurrentPrice(2)), $last_id);
	$foodid2Total = number_format($foodid2qty * getCurrentPrice(2),2);
	
}
if ($foodid3qty > 0) {
	updateOrderTable(3, $foodid3qty, ($foodid3qty*getCurrentPrice(3)), $last_id);
	$foodid3Total = number_format($foodid3qty * getCurrentPrice(3),2);
	
}
if ($foodid4qty > 0) {
	updateOrderTable(4, $foodid4qty, ($foodid4qty*getCurrentPrice(4)), $last_id );
	$foodid4Total = number_format($foodid4qty * getCurrentPrice(4),2);
	
}
if ($foodid5qty > 0) {
	updateOrderTable(5, $foodid5qty, ($foodid5qty*getCurrentPrice(5)), $last_id);
	$foodid5Total = number_format($foodid5qty * getCurrentPrice(5),2);
	
}

if ($foodid6qty > 0) {
	updateOrderTable(6, $foodid6qty, ($foodid6qty*getCurrentPrice(6)), $last_id );
	$foodid6Total = number_format($foodid6qty * getCurrentPrice(6),2);
	
}
if ($foodid7qty > 0) {
	updateOrderTable(7, $foodid7qty, ($foodid7qty*getCurrentPrice(7)), $last_id);
	$foodid7Total = number_format($foodid7qty * getCurrentPrice(7),2);
	
}
if ($foodid8qty > 0) {
	updateOrderTable(8, $foodid8qty, ($foodid8qty*getCurrentPrice(8)), $last_id);
	$foodid8Total = number_format($foodid8qty * getCurrentPrice(8),2);

}

if ($foodid9qty > 0) {
	updateOrderTable(9, $foodid9qty, ($foodid9qty*getCurrentPrice(9)), $last_id );
	$foodid9Total = number_format($foodid9qty * getCurrentPrice(9),2);
}
if ($foodid10qty > 0) {
	updateOrderTable(10, $foodid10qty, ($foodid10qty*getCurrentPrice(10)), $last_id);
	$foodid10Total = number_format($foodid10qty * getCurrentPrice(10),2);

}
if ($foodid11qty > 0) {
	updateOrderTable(11, $foodid11qty, ($foodid11qty*getCurrentPrice(11)), $last_id);
	$foodid11Total = number_format($foodid11qty * getCurrentPrice(11),2);

}

if ($foodid12qty > 0) {
	updateOrderTable(12, $foodid12qty, ($foodid12qty*getCurrentPrice(12)), $last_id);
	$foodid12Total = number_format($foodid12qty * getCurrentPrice(12),2);

}
if ($foodid13qty > 0) {
	updateOrderTable(13, $foodid13qty, ($foodid13qty*getCurrentPrice(13)), $last_id);
	$foodid13Total = number_format($foodid13qty * getCurrentPrice(13),2);

}

if ($foodid14qty > 0) {
	updateOrderTable(1, $foodid14qty, ($foodid14qty*getCurrentPrice(14)), $last_id );
	$foodid4Total = number_format($foodid14qty * getCurrentPrice(14),2);

}
if ($foodid15qty > 0) {
	updateOrderTable(15, $foodid15qty, ($foodid15qty*getCurrentPrice(15)), $last_id);
	$foodid15Total = number_format($foodid15qty * getCurrentPrice(15),2);
	
}
if ($foodid16qty > 0) {
	updateOrderTable(16, $foodid16qty, ($foodid16qty*getCurrentPrice(16)), $last_id);
	$foodid16Total = number_format($foodid16qty * getCurrentPrice(16),2);

}

if ($foodid17qty > 0) {
	updateOrderTable(17, $foodid17qty, ($foodid17qty*getCurrentPrice(17)), $last_id );
	$foodid17Total = number_format($foodid17qty * getCurrentPrice(17),2);

}
if ($foodid18qty > 0) {
	updateOrderTable(18, $foodid18qty, ($foodid18qty*getCurrentPrice(18)), $last_id );
	$foodid18Total = number_format($foodid18qty * getCurrentPrice(18),2);
	
}

//echo "Thank You for ordering with us!<br>Check your email for your order:<br>";
if ($foodid1qty > 0){
	//echo "Thai Special Set A (2 pax) - Qty:$foodid1qty - $$foodid1Total<br>";
	$id1message = "Thai Special Set A (2 pax) - Qty:$foodid1qty - $$foodid1Total\n";
}
if ($foodid2qty > 0) {
	//echo "Thai Special Set B (4 pax) - Qty:$foodid2qty - $$foodid2Total<br>";
	$id2message = "Thai Special Set B (4 pax) - Qty:$foodid2qty - $$foodid2Total\n";
}
if ($foodid3qty > 0) {
	//echo "Thai Special Set C (8 pax) - Qty:$foodid3qty - $$foodid3Total<br>";
	$id3message = "Thai Special Set C (8 pax) - Qty:$foodid3qty - $$foodid3Total\n";
}
if ($foodid4qty > 0){
	//echo "Tomyam Clear Soup (Chicken) - Qty:$foodid4qty - $$foodid4Total<br>";
	$id4message = "Tomyam Clear Soup (Chicken) - Qty:$foodid4qty - $$foodid4Total\n";
}
if ($foodid5qty > 0) {
	//echo "Tomyam Clear Soup (Seafood) - Qty:$foodid5qty - $$foodid5Total<br>";
	$id5message = "Tomyam Clear Soup (Seafood) - Qty:$foodid5qty - $$foodid5Total\n";
}
if ($foodid6qty > 0) {
	//echo "Tomyam Red Soup (Chicken) - Qty:$foodid6qty - $$foodid6Total<br>";
	$id6message = "Tomyam Red Soup (Chicken) - Qty:$foodid6qty - $$foodid6Total\n";
}
if ($foodid7qty > 0){
	//echo "Tomyam Red Soup (Seafood) - Qty:$foodid7qty - $$foodid7Total<br>";
	$id7message = "Tomyam Red Soup (Seafood) - Qty:$foodid17qty - $$foodid7Total\n";
}
if ($foodid8qty > 0) {
	//echo "Green Curry Soup (Chicken) - Qty:$foodid8qty - $$foodid8Total<br>";
	$id8message = "Green Curry Soup (Chicken) - Qty:$foodid8qty - $$foodid8Total\n";
}
if ($foodid9qty > 0) {
	//echo "Green Curry Soup (Seafood) - Qty:$foodid9qty - $$foodid9Total<br>";
	$id9message = "Green Curry Soup (Seafood) - Qty:$foodid9qty - $$foodid9Total\n";
}
if ($foodid10qty > 0){
	echo "Phad Thai (Chicken) - Qty:$foodid10qty - $$foodid10Total<br>";
	$id10message = "Phad Thai (Chicken)) - Qty:$foodid10qty - $$foodid10Total\n";
}
if ($foodid11qty > 0){
	//echo "Phad Thai (Seafood) - Qty:$foodid11qty - $$foodid11Total<br>";
	$id11message = "Phad Thai (Seafood) - Qty:$foodid11qty - $$foodid11Total\n";
}
if ($foodid12qty > 0) {
	//echo "Tomyam Fried Rice - Qty:$foodid12qty - $$foodid12Total<br>";
	$id12message = "Tomyam Fried Rice - Qty:$foodid12qty - $$foodid12Total\n";
}
if ($foodid13qty > 0) {
	//echo "Pineapple Fried Rice - Qty:$foodid13qty - $$foodid13Total<br>";
	$id3message = "Pineapple Fried Rice - Qty:$foodid13qty - $$foodid13Total\n";
}
if ($foodid14qty > 0){
	//echo "Thai Basil Chicken Rice - Qty:$foodid14qty - $$foodid14Total<br>";
	$id14message = "Thai Basil Chicken Rice - Qty:$foodid14qty - $$foodid14Total\n";
}
if ($foodid15qty > 0) {
	//echo "Tom Yum Glass Noodle Soup - Qty:$foodid15qty - $$foodid15Total<br>";
	$id15message = "Tom Yum Glass Noodle Soup - Qty:$foodid15qty - $$foodid15Total\n";
}
if ($foodid16qty > 0) {
	//echo "White Rice - Qty:$foodid16qty - $$foodid16Total<br>";
	$id16message = "White Rice - Qty:$foodid16qty - $$foodid16Total\n";
}
if ($foodid17qty > 0){
	//echo "Mango Sticky Rice - Qty:$foodid17qty - $$foodid17Total<br>";
	$id17message = "Mango Sticky Rice - Qty:$foodid17qty - $$foodid17Total\n";
}
if ($foodid18qty > 0){
	//echo "Thai Milk Tea - Qty:$foodid18qty - $$foodid18Total<br>";
	$id18message = "Thai Milk Tea - Qty:$foodid18qty - $$foodid18Total\n";
}



$to      = "f32ee@localhost, $email";
$subject = 'Your Soi MakMak Order';
$message = "Hi $name,\r\n we have recieved your orders: \r\n $id1message$id2message$id3message$id4message$id5message$id6message$id7message$id8message$id9message$id10message$id11message$id12message$id13message $id14message$id15message$id16message$id17message$id18message \r\n it will delivered to $address, S$postalcode. \r\n Thank You for ordering with us!";



$headers = "From:f32ee@localhost" .
    "Reply-To: f32ee@localhost" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff32ee@localhost');
//$menuLink = "<a href='http://192.168.56.2/f32ee/Project%20codes/cart(2).php'>Click here</a>";
//echo "<br>$menuLink to return to menu page.";

return;


function updateOrderTable($foodid, $quantity, $amount, $last_id) {
	//Syntax: maysqli(IP address of server, username, pwd, DB instance)
	@ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

	if (mysqli_connect_errno()) {
	echo "Error: Could not connect to database.  Please try again later.";
	exit;
	}
	$query = "insert into f32ee.SMM_Food_order_items (order_id, foodid, quantity, amount, customer_id) values (NULL, $foodid, $quantity, $amount, $last_id);";
	$result = $db->query($query);
 	
	
	if (!$result) {
		echo "An error has occured. The product was not added to orders.<br>" ;
	}
	$db->close();
	
}


function getCurrentPrice($foodid) {
	//Syntax: maysqli(IP address of server, username, pwd, DB instance)
	@ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

	if (mysqli_connect_errno()) {
	echo "Error: Could not connect to database.  Please try again later.";
	exit;
	}
	
	$query = "SELECT * FROM food_menu WHERE foodid = $foodid;";
	$result = $db->query($query);
	
	
	
	$row = $result->fetch_assoc();
	return $row['amount'];

	
	$db->close();
}



?>

 