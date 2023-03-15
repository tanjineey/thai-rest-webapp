<?php //catalog.php
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
		
		<style>

		h5.subtext:after {
		  content: " ";
		  border-bottom: 3px solid #FFB30E;
		  height: 3px;
		  display: block;
		  position: relative;
		  top: 9px;
		  width: 60px !important;
		  margin: auto;
		}

		.category h5.subtext {
		  margin-bottom: 60px;
		}

		.container.food-items {
		  /*margin-top: 50px;*/
		  padding-left: 50px;
		  padding-right: 50px;
		  padding-bottom: 50px;
		}

		.food-items .row.gx-4.gx-lg-5 {
		  justify-content: center;
		  margin-bottom: 20px;
		}

		.card-body { 
		   padding: 10px;
		}

		.food-items .card-body img {

			border-radius: 0.25rem;
			height: 265px;
			width: 360px;
	
		}
		.card-content{
		  padding: 20px 20px 0 20px;
		}
		
		p.card-text {
		margin-bottom: 0px;
		}
		
		.card-footer {
		  padding: 0 0 15px 15px;
		}    

		.card-footer .btn-primary {
		  background-color: #FFB30E;
		  border-radius: 20px;
		  padding: 5px 10px;
		}    


		.btn-primary {
		  color: #fff;
		  background-color: #FFB30E;
		}
		
		.btn-primary:hover {
		background-color: #7E1F1F;
		}

		</style>
    </head>
    <body>
    
        <div id="navbar_top"> 
            <div class = "header">
                <div class="col-2">
                <a href="index.html"><img src ="soi makmak.png"  class = "logo" style = "height:110px;"></a>
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
        <div>
		
		 
	    <div class="container category">
        <h5 class="subtext" style="text-align:center;">Dessert</h2>
		</div>
		
		<!--<p style="margin-left:150px;">Your shopping cart contains <?php
	//echo count($_SESSION['cart']); ?> items.</p>-->
		
		<?php 
		
		$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
		// Check connection
		if (mysqli_connect_errno()) {
			echo "Error: Could not connect to database.  Please try again later.";
			exit;
		}
	
		//$query = "SELECT * FROM food_menu where category LIKE 'Bundles'";
		$query = "SELECT * FROM food_menu";
		$result = $conn->query($query);
		$num_results = $result->num_rows;
		$items = array();
		$prices = array();
		$images = array();
		
		for ($i=0; $i < $num_results; $i++){
		$row = $result->fetch_assoc();
		$items[$i]=$row['foodname'];
		$prices[$i]=$row['amount'];
		$images[$i]=$row['imageid'];
		}
		
		//var_dump($items);
		//var_dump($prices);
		mysqli_close($conn);
		?>
		
		<div class="container food-items">
			<div class="row gx-4 gx-lg-5">
				<?php
				//for($i=0; $i<count($items); $i++){
				for ($i=15; $i<18; $i++){
				echo "<div class='col-md-4 mb-5'>
							<div class='card h-100'>
								<div class='card-body'>
								<span class ='hovertext' data-hover='Click on the image for more information'>
									<a href='" .'details.php'. '?add=' .($i+1). "'><img src='".$images[$i]."' border='0'></a>
									<div class='card-content'>
										<h3 class='card-title'>".$items[$i]."</h3>
										<p class='card-text'>$".number_format($prices[$i], 2)."</p>
									</div>
								</div>
								<div class='card-footer'><a class='btn btn-primary btn-sm' href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to cart</a></div>
							</div>
						</div>"	;
				}	
				?>
			</div>
		</div>	
		
      
        </div>
		    <footer>
      <section class="py-0 pt-7 bg-1000">

        <div class="container">
         
          
          <div class="row">
            <img src ="soi makmak.png" class = "logo" style = "height:110px;">
            <div class="col-6 mb-3">
             
              <h5 class="lh-lg fw-bold text-white">Soi MakMak</h5>
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