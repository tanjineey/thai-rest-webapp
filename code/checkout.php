<?php 
//include "dbconnect.php";
/*if (isset($_GET['submit'])) {
	if (empty($_GET['name']) || empty ($_GET['email']|| empty ($_GET['address']|| empty ($_GET['postalcode']) ) {
	echo "All fields to be filled in for your order to be delivered";
	exit;}
	}*/

session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Soi MakMak | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="homepage.css">
		<script type="text/javascript" src="jobs.js"></script>
		<style>

			.container.d-flex.justify-content-center.mt-5 {
			padding: 40px;
			}
			
			.rate.bg-success.py-3.text-white.mt-3 {
				margin-top: 20px;
			}

			.rate {
				border-bottom-right-radius: 12px;
				border-bottom-left-radius: 12px
			}

			.rating {
				display: flex;
				flex-direction: row-reverse;
				justify-content: center;
				    margin-bottom: 10px;
			}

			.rating>input {
				display: none
			}

			.rating>label {
				position: relative;
				width: 1em;
				font-size: 30px;
				font-weight: 300;
				color: #FFD600;
				cursor: pointer
			}

			.rating>label::before {
				content: "\2605";
				position: absolute;
				opacity: 0
			}

			.rating>label:hover:before,
			.rating>label:hover~label:before {
				opacity: 1 !important
			}

			.rating>input:checked~label:before {
				opacity: 1
			}

			.rating:hover>input:checked~label:before {
				opacity: 0.4
			}
			.btn-primary {
				color: #fff;
				background-color: #FFB30E;
				border: none;
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
                          <a href="bundles.php">Bundles</a>
                          <a href="Soup.php">Soup</a>
                          <a href="Mains.php">Mains</a>
                          <a href="Dessert.php">Dessert/Beverages</a>
                        </div>
                    </li>
                    <a href="promotions.html">Promotions</a>
                    <a href="contactus.html">Contact Us</a>
                </div>
                    <a href="cart2.php"><img id="cart" src ="Cart_button.png" style = "width:110px; margin-top:20px; padding-top:20px;" >
				
					</a>   
            </div>
        </div>


 
<div class="container d-flex justify-content-center mt-5">
    <div class="card text-center mb-5">
       
		 <p>Thank you for ordering with us!<br><br> 	
			Please check your email for your delivery order details.<br> </p>
        <form  action="ratings.php" method="get">
        <div class="rate bg-success py-3 text-white mt-3">
            <h2>Rate our services</h2>
            <div class="rating"> 
			 <input type="radio" name="rating" value="5" id="5"> <label for="5">&#9734;</label>
			 <input type="radio" name="rating" value="4" id="4"> <label for="4">&#9734;</label>
			 <input type="radio" name="rating" value="3" id="3"> <label for="3">&#9734;</label>
			 <input type="radio" name="rating" value="2" id="2"> <label for="2">&#9734;</label>
			 <input type="radio" name="rating" value="1" id="1"> <label for="1">&#9734;</label>
			<!--&#9734; - represents star symbol -->
			<!--<input type="radio" name="rating" value="1" id="1"> <label for="1">☆</label>-->
			</div>
				<label for="comments" style="margin-left:-380px;">Other Comments: </label> <br>
				<textarea name="comments" id="comments" rows="6" cols="67"class="input" style="margin-bottom:20px;"></textarea> <br>
            <div class="buttons px-4 mt-0"> 
			<button class="btn btn-primary">Submit</button> 
			</div>
		</div>
		</form>
    </div>
</div> 

<!--<a href='http://192.168.56.2/f32ee/Project%20codes/cart(2).php'>Click here</a> to return to menu page.-->

 <footer>
      <section class="py-0 pt-7 bg-1000">

        <div class="container">
         
          
          <div class="row">
            <img src ="soi makmak.png" class = logo style = "height:110px;">
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