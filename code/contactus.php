<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Soi MakMak | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="homepage.css">
        <link rel="stylesheet" href="promotions.css">
        <script type="text/javascript" src="homepage.js"></script>
    </head>
    <body>
    
        <div id="navbar_top"> 
            <div class = "header">
				<div class="col-2">
                <a href='index.html'><img src ="soi makmak.png" class = "logo" style = "height:110px;"></a>
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
                    <a href="cart2.php"><img id="cart" src ="Cart_button.png" style = "width:110px; margin-top:20px; padding-top:20px;" ></a>
            </div>
        </div>

        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col">
        
                                <div class="banner-content">
                                    <div class ="title">Contact us</div>
                                </div>
                            
                    </div>
                </div>
            </div>
        </section>

         <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="promotions pb-5 pt-8">

        <div class="container">
          <div class="row">
            <div class="col-12">
            <h3>Leave a Message<br></h3> 
			<div class="form">
			<form method="post" action="feedback.php" style="padding:10px;">
				
				<label for="Name">*Name: &nbsp</label>
				<input type="text" name="name" id="name" class="input" onblur="myName()" placeholder="John English" required>
				
				<label for="email">&nbsp &nbsp &nbsp *E-mail: &nbsp</label>
				<input type="email" name="email" id="email" class="input" onblur="myEmail()" placeholder="johnnyeng@gmail.com" required> <br><br>
				
				<label for="msg">*Leave a message: </label> <br>
				<textarea name="msg" id="msg" rows="6" cols="67"class="input" placeholder="Message" required></textarea> <br>
				
				<input id="reset" type="reset" value="Clear">
				<input id="submit" type="submit" value="Submit" name= "submit" >
			</form>
			</div>
			
			<?php
				/*$conn = mysqli_connect("localhost","f32ee","f32ee","f32ee");
				if (!$conn){
					echo "Error: Could not connect to database. Please try again later.";
					exit;
				}
				if ( isset( $_POST['submit'] ) ) {

					$name = $_POST['name'];
					$email = $_POST['email'];
					$msg = $_POST['msg'];

					$sql = "INSERT INTO support (name, email, msg) VALUES ('$name','$email','$msg')";
					$result=mysqli_query($conn,$sql);
					
					if(!result){
						echo '<script type="text/javascript"> alert("Sorry! \nPlease resubmit form! "); window.location.href="contactus.php"</script>'; 
					}
					else{
						echo '<script type="text/javascript"> window.alert("Thank you! \nWe have received your enquiry and will be in touch with you soon! "); 
						window.location.href="contactus.php"</script>';
					}
				}*/
			?>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
    
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


     
        <!--<div id = "carousel">
            Photos
        </div>
        <div class = "row" >
            <div id = "menu">
                View menu 
            </div>
            <div id = "promo">
                <div>

                </div>
                <div>
                    
                </div>
            </div>
        </div>
        <footer>
            <div class = "row">
                Copyright &copy; All Rights Reserved 
                <div class = "column" style ="margin-left: 400px;text-decoration: none;">
                    <a href = "menu.html">Menu</a>
                    <a href="promotions.html">Promotions</a>
                    <a href="contactus.html">Contact Us</a>
                </div>
            </div>
        </footer>
    </body>-->

</html>

