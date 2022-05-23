<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Soi MakMak | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="homepage.css">
		<script type="text/javascript" src="jobs.js"></script>
		<style>



			.rate {
				border-bottom-right-radius: 12px;
				border-bottom-left-radius: 12px
			}

			.rating {
				display: flex;
				flex-direction: row-reverse;
				justify-content: center
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


 
		<?php
				$conn = mysqli_connect("localhost","f32ee","f32ee","f32ee");
				if (!$conn){
					echo "Error: Could not connect to database. Please try again later.";
					exit;
				}
				if ( isset( $_POST['submit'] ) ) {

					$name = $_POST['name'];
					$email = $_POST['email'];
					$type_enquiry = $_POST['type_enquiry'];
					$msg = $_POST['msg'];
					
					$sql = "INSERT INTO SMM_Contact (contact_id, name,email,type_enquiry, msg) VALUES (NULL,'$name','$email','$type_enquiry','$msg')";
					$result=mysqli_query($conn,$sql);
					
					if(!result){
						echo '<script type="text/javascript"> alert("Sorry! \nPlease resubmit form! "); window.location.href="contactus.php"</script>'; 
					}
					else{
						echo '<script type="text/javascript"> window.alert("Thank you! \nWe have received your enquiry and will be in touch with you soon! "); 
						window.location.href="contactus.html"</script>';
					}
				}


				$conn->close();
			?>

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