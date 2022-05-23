<?php
    session_start();
    $conn = mysqli_connect("localhost","f32ee","f32ee","f32ee");
    if (!$conn){
        echo "Error: Could not connect to database. Please try again later.";
            exit;
    }
    if(isset($_GET['add'])){
        $foodid = $_GET['add'];
        $sql = "SELECT * FROM food_menu where foodid=$foodid";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if ($count==1){
            $row = mysqli_fetch_assoc($result);
            $foodname = $row['foodname'];
            $amount = $row['amount'];
            $imageid= $row['imageid'];
            $productdesc = $row['description']; 
            
        }
        else{
        echo "none";
        }
    }
?>
<html lang =en>
    <head>
        <style>
            
        .selected{
            display:flex;
            margin:50px 100px;
        }
        .desc{
            margin: 0px 20px;
        }

        .cross{
        text-decoration:none;
        font-size:40px;
        position:absolute;
        right:100px;
        }
        </style>
</head>
    <body>

    <div class="main">
        <div class="selected">
        <?php echo "<img src='{$imageid}' width='360px' height='auto'>";?>        
        <div class="desc">
           
            <a href="javascript:history.back()" class="cross">&#215;</a>
			 <h2 style="margin:0;"><?php echo $foodname; ?></h2>
            <p><?php echo $productdesc; ?></p>
            <p><?php echo "$". $amount; ?></p>
            
        </div>
        
            
        </div>
        
        <!-- <form action="./cart.php" method="POST"> -->
            <!-- <div class="message">
                <h3>Special Instructions</h3>
                <textarea placeholder="eg: no pepper"rows="4" cols="50" class="area" name="message"></textarea><br><br>
            </div> -->
            <div class="qty">

                <!-- <p><input type='button' value='-' id="qtyminus" onclick="minus('quantity')"/>
                <input type='text' id='quantity' value='1' name="itemqty"/>
                <input type='button' value='+' id="qtyplus" onclick="plus('quantity')"/></p> -->
                <input type="hidden" name="productid" value="<?php echo $foodid;?>">
                <input type="hidden" name="productname" value="<?php echo $foodname;?>">
                <input type="hidden" name="price" value="<?php echo $amount;?>">
                <!-- <input type="submit" value="submit" class="addcart" name="submit"> -->
            </div>
        <!-- </form> -->
        </div>

    </div>
   
</body>

</html>