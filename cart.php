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
<html>
<head>
<title>Shopping Cart</title>
<style>
	#nopromo{
		visibility:hidden;
	}
</style>
</head>
<body>
<h1>Your Order </h1>
<?php 
		
		$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
		// Check connection
		if (mysqli_connect_errno()) {
			echo "Error: Could not connect to database.  Please try again later.";
			exit;
		}
	
		$query = "SELECT * FROM food_menu";
		$result = $conn->query($query);
		$num_results = $result->num_rows;
		$items = array();
		$prices = array();
		
		for ($i=0; $i < $num_results; $i++){
		$row = $result->fetch_assoc();
		$items[$i]=$row['foodname'];
		$prices[$i]=$row['amount'];
		}
		
		//var_dump($items);
		//var_dump($prices);
		mysqli_close($conn);
		
		/*$items = array(
			'Thai Special Set A (2 pax)',
			'Thai Special Set B (4 pax)',
			'Thai Special Set C (8 pax)');*/
		/*$prices = array(23.00, 48.00, 96.00);*/
		
		?>

<table border="0" style='border-spacing:20px;'>
	<thead>
	<tr>
		
		<th align='left'>Food Name</th>
		<th>Price</th>
	</tr>
	</thead>
	<tbody>
<?php

$total = 0;
// Displays all items from a cart
for ($i=0; $i < count($_SESSION['cart']); $i++){
	echo "<tr>";
	// $_SESSION['cart'][$i] contains individual Indexes
	//$items shows item purchased
	echo "<td>" .$items[$_SESSION['cart'][$i]]. "</td>";
	echo "<td align='right'>$";
	// $prices shows price of item purchased
	echo number_format($prices[$_SESSION['cart'][$i]], 2). "</td>";
	echo "</tr>";
	$total = $total + $prices[$_SESSION['cart'][$i]];
	
}

?>
	</tbody>
	<tfoot>
	<tr>
		
		<th align='right'>Total:</th><br>
		<!--<td></td>-->
		<th align='right'>$<?php echo number_format($total, 2); ?>
		</th>
	</tr>
	<tr>
	<td><input id = promocode style="padding:5px;" placeholder = 'Enter Promo Code'></input></td>
	<td><a onclick="applypromocode()" id = promobtn class = "btn btn-primary btn-sm" >Apply</a><br>
	
</td>
<tr><td><span id =nopromo>No promo code to apply!</span></td></tr>
	</tr>
	</tfoot>
		
</table>
<p><a href="viewmenu.php">Back to menu</a> or
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a></p> 
<script>
	function applypromocode(){
		var promocode = document.getElementById("promocode");
		var promobtn = document.getElementById("promobtn");
		var nopromo = document.getElementById("nopromo");
		if (promocode.value == "makmakcny"){
			window.location.href="cartpromo.php";
		
		} else if (promocode.value =="makmakmaster"){
			window.location.href="cartpromo2.php";
		}
		else if (promocode.value =="makmaktea"){
			window.location.href="cartpromo3.php";
		}
		 else {
			nopromo.style.visibility="visible";
		}
			
		
	};
</script>
<!-- PHP self calls back same php file -->

</body>
</html>