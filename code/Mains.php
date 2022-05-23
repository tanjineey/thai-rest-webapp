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
				for ($i=9; $i<12; $i++){
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
			<div class="row gx-4 gx-lg-5">
				<?php
				//for($i=0; $i<count($items); $i++){
				for ($i=12; $i<15; $i++){
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