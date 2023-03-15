<?php 
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
} // is there a variable cart that is not set 
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Soi MakMak | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="homepage.css">
		<script type="text/javascript" src="deliveryform.js"></script>
		<style>
		
		.customer-form {
		padding: 30px;
		}
		table#table {
		    width: 100%;
			/* margin: auto; */
			padding-left: 10%;
			padding-right: 10%;
		}
		td.total-price {
			display: flex;
			justify-content: center;
		}
		td.col2 {
		padding-top: 150px;
		}
		</style>
      
    </head>
    <body>
  
        <div id="navbar_top"> 
            <div class = "header">
				<div class="col-2">
                <a href="index.html"><img src ="soi makmak.png" class = "logo" style = "height:110px;"></a>
				</div>
                <div class="col-8">
                    <li class="dropdown">
                        <button class="dropbtn">Menu</button>
                        <div class="dropdown-content">
						<a href="viewmenu.php">Full Menu</a>
                          <a href="bundles.php">Bundles</a>
                          <a href="Soup.php">Soup</a>
                          <a href="Mains.php">Mains</a>
                          <a href="Dessert.php">Dessert</a>
                          <a href="Dessert.php">Beverages</a>
                          <a href="reserve.php">Reserved</a>

                        </div>
                    </li>
                    <a href="promotions.html">Promotions</a>
                    <a href="contactus.html">Contact Us</a>
                </div>
                    <a href="cart2.php"><img id="cart" src ="Cart_button.png" style = "width:110px; margin-top:20px; padding-top:20px;" >
					<p style="margin-top: -39px;margin-left: 86px;background-color: #df1a33;color: #fdf8f9;padding-top: 9px;padding-bottom: 7px;padding-right: 15px;padding-left: 4px;font-size: 19px;border-radius: 0 20px 20px 0;"> (<?php echo count($_SESSION['cart']); ?>)</p>
					</a> 
            </div>
        </div>
     
	<div class="customer-form">
    	<form  action="placeorder.php" method="post">
			<table id='table'>
			<tr>
			
				<td>
					<?php 
					include_once ("cart.php");
				
					?> 
				</td>
			
				
				<td class="col2">
				<b>Delivery Address</b>
				<p>*Required fields</p>
				   <label for="msg">*Name: </label><br>
				   <input type="text" name="name"  id="name" size=53 required  onchange="validateName()"><br /><br />
				   <label for="msg">*E-mail: </label><br>
				   <input type="text" name="email" id="email" size=53 required onchange="validateEmail()"><br /><br />
					<label for="msg">*Address: </label><br>
				   <textarea type="text" name="address" id="address" rows="3" cols="50" required ></textarea><br /><br />
				   <label for="msg">*Postal Code: </label><br>
				   <input type="text" name="postalcode" id="postalcode" size=53  onchange="validatePostal()">  
				   <br />
				   <br />
				</td>
			  </tr>
			  
			  <tr>
			  <td></td>
			  <td>
			  <input style ="border:none" class ="btn btn-primary" type="submit" value="Checkout">
			  </td>
			  </tr>
			  
			</table>   
		</form>
	</div>

    <footer>
      <section class="py-0 pt-7 bg-1000">

        <div class="container">
         
          
          <div class="row">
            <img src ="soi makmak.png" class = logo style = "height:110px;">
            <div class="col-6 mb-3">
             
              <h5 class="lh-lg fw-bold text-white">SOi MakMak</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Menu</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Contact us </a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Promotions</a></li>
                
              </ul>
            </div>
            <div class="col-6 mb-3">
              <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp; Cancellation</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy Policy</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Cookie Policy</a></li>
              </ul>
            </div>
           
            
          </div>
          <hr class="border border-800" />
          <div class="row flex-center pb-3">
            <div class="col-md-6 order-0">
              <p class="text-200 text-center text-md-start">Copyright &copy; All Rights Reserved 2021, Soi MakMak &nbsp;</p>
            </div>
            <div class="col-md-6">
              <p class="text-200 text-center text-md-end"> By Jeral and Jelyn for EE4717 Web Application Design
              </p>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>

    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    // remove padding top from body
                    document.body.style.paddingTop = '0';
                }
            });
        });
    </script>
		 
    </body>

</html>

