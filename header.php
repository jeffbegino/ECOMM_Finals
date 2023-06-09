<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
<!--
   <div class="header-1">
      <div class="flex">
         <div class="share">
         <img src="cropcomm_logo.png" class="responsive"  style="height:78.75px;width:78.75px">
         </div>
         <a href="logout.php" class="delete-btn" style= "background-color: #f1a50f">logout</a>
      </div>
   </div>
-->
   <div class="header-2">
      <div class="flex">
      <img src="cropcomm_logo.png" class="responsive"  style="height:78.75px;width:78.75px">
      <a href="home.php" class="logo">Crop Comm Store</a>

         <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="contact.php">CONTACT</a>
            <a href="shop.php">SHOP</a>
            <a href="orders.php">ORDERS</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_product.php" class="fas fa-search"></a>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
            <div id="user-btn" class="fas fa-user"></div>
         </div>
         
         <div class="user-box">
            <p>USER: <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>EMAIL: <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn" style= "background-color: #f1a50f">logout</a>
         </div>
      </div>
   </div>

</header>