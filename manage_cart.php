<?php
 
// Starting the session, to use and
// store data in session variable
session_start();
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = " <script> alert('You have to login first'); </script> ";
    echo 
    "<script>
    alert('You have to login first');
    window.location.href='login_page.php';
    </script>";
} 
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after loggin out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  text-decoration: none;
  size: 20px;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

.bee{
  
  color:#fff;
  border:none;
  position:relative;
  
  font-size:1em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
    }
.bee:hover{
 
  color:#0ff5e9;
  
}
.bee:before,.bee:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #0ff5e9;
  transition:400ms ease all;
}
.bee:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.bee:hover:before,.bee:hover:after{
  width:100%;
  transition:800ms ease all;
}
.b{
  background:MediumTurquoise; 
  color:#fff;
  border:none;
  position:relative;
  height:300px;
  width: 300px;
  font-size:1.1em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
.b:hover{
  background:DarkCyan;
  color:#0ff5e9;
  font-size:2em;
  height: 380px;
  width: 350px;
}
.b:before,.b:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #1AAB8A;
  transition:400ms ease all;
}
.b:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.b:hover:before,.b:hover:after{
  width:100%;
  transition:800ms ease all;
}
.shop{
  opacity:1;
  border-color: white;
}
.link{
  background: black;
}
.wrapper{
  max-height: 410px;
  border: 3px solid #ddd;
  display: flex;
  overflow-x: auto ;
}
.wrapper:: -webkit-scrollbar{
 width: 0 ;
 height: 0;
}
.wrapper .item{
  min-width: 1000px;
  height: 410px;
  line-height: 110px;
  background-color: #ddd;
  margin-right: 2px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 250px;
  height: 270px;
  border-radius: 4px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  margin: auto;
  font-size: 15px;
}

.center {
 
  text-align: center;
}

.services {
  background: #131313;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100%;
  padding: 10rem 0;
}


.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #7de8e1, 0 0 40px #7de8e1, 0 0 50px #7de8e1, 0 0 60px #7de8e1, 0 0 70px #7de8e1;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #0ff5e9, 0 0 40px #0ff5e9, 0 0 50px #0ff5e9, 0 0 60px #0ff5e9, 0 0 70px #0ff5e9, 0 0 80px #0ff5e9;
  }
}
.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 1em;  
  border: none;
  outline: none;
  color: white;
  padding: 30px 16px 25px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown-content {
  display: none;
  position: fixed;
  background-color: #333;
  min-width: 160px;
}

.dropdown-content a {
  float: none;
  color: white;
  text-decoration: none;
  display: block;
  text-align: left;
  size: 20px;
  padding: 10px 16px 10px;
}

.dropdown-content a:hover {
  background-color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
}

</style>
</head>
<body style="font-family: Helvetica; margin: 0;">
  <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
<ul>
  <div class="dropdown">
    <button class="dropbtn"><?php echo $_SESSION['email']; ?> <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="myorders.php">My Orders</a>
      <a href="mycart.php">My Cart</a>
      <a href="manage_cart.php?logout='1'">Sign Out</a>
    </div>
  </div> 
  <li><a href="home_page.html" target="_blank" style="padding: 30px 20px 20px 20px;" class="bee" target="_blank">ABOUT US</a></li>   
  <li><a href="manage_cart.php" style="padding: 30px 20px 20px 20px;" class="bee">EASY SHOP</a></li>
  <li><a href="index.php" target="_blank" style="padding: 30px 20px 20px 20px;" class="bee">HOME</a></li>
  <li style="float: left; margin-left: 15px;"><img src = "image/fevicon.jpg" height="70px" width="70px"></li>
  <li style="padding: 20px 380px 0px 0px; float: left; margin-left: 5px;"><font size="6" color="white">CoviTech</font></li>
</ul>
<br><br><br><br>

<h1 class="glow" id="shop">EASY SHOP</h1>
<center>
<table class="center">
      <tr>
        <th style="padding: 0px 22px 0px 44px;">
          <div class="card">
          <img src="image/Sanitizer.jpg" alt="Avatar" style="width:50%">
            <div class="container" style="size:20px">
              <h4><b>Sanitizers(500 ml)</b></h4>
              <p>₹150</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Sanitizer">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="150">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

        <th style="padding: 0px 22px 0px 34px;">
          <div class="card">
              <img src="image/mask.jpg" alt="Avatar" style="width:50%">
            <div class="container">
              <h4><b>Mask</b></h4>
              <p>₹50</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Mask">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="50">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email'];?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

    <th style="padding: 0px 22px 0px 34px;">
          <div class="card">
              <img src="image/oximeter.jpg" alt="Avatar" style="width:50%">
            <div class="container">
              <h4><b>Oximeter</b></h4>
              <p>₹1250</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Oximeter">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="1250">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

    <th style="padding: 0px 22px 0px 34px;">
          <div class="card">
            <img src="image/veg.png" alt="Avatar" style="width:50%">
            <div class="container">
              <h4><b>Veggie Wash(500 Ml)</b></h4>
              <p>₹800</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Veggie Wash(500 Ml)">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="800">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>
      </tr>

<!--2nd row-->
      <tr>
        <th style="padding: 30px 22px 0px 44px;">
          <div class="card">
              <img src="image/vap.jpg" alt="Avatar" style="width:47%">
            <div class="container">
              <h4><b>Vapourizer</b></h4>
              <p>₹200</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Vapourizer">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="200">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

        <th style="padding: 30px 22px 0px 34px;">
          <div class="card">
            <img src="image/dis.jpg" alt="Avatar" style="width:50%">
            <div class="container">
              <h4><b>Disinfectant Spray</b></h4>
              <p>₹250</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Disinfectant Spray">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="250">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
           <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

    <th style="padding: 30px 22px 0px 34px;">
          <div class="card">
            <img src="image/fcsheild.jpg" alt="Avatar" style="width:50%">
            <div class="container">
              <h4><b>Face Shield</b></h4>
              <p>₹150</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Face Shield">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="150">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

    <th style="padding: 30px 22px 0px 34px;">
          <div class="card">
            <img src="image/n95.jpg" alt="Avatar" style="width:47%">
            <div class="container">
              <h4><b>N95 Mask</b></h4>
              <p>₹95</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="N95 Mask">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="95">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>
      </tr>

<!--3rd row-->

       <tr>
        <th style="padding: 30px 22px 0px 44px;">
          <div class="card">
            <img src="image/floor.jpg" alt="Avatar" style="width:47%">
            <div class="container">
              <h4><b>Floor cleaner</b></h4>
              <p>₹225</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Floor cleaner">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="225">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

        <th style="padding: 30px 22px 0px 34px;">
          <div class="card">
            <img src="image/therms.jpg" alt="Avatar" style="height: 47%">
            <div class="container">
              <h4><b>Mercury thermometer</b></h4>
              <p>₹150</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Mercury thermometer">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="150">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
           <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

    <th style="padding: 30px 22px 0px 34px;">
          <div class="card">
            <img src="image/hot.jpg" alt="Avatar" style="width:50%">
            <div class="container">
              <h4><b>Hot Watter Bag</b></h4>
              <p>₹180</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Hot Watter Bag">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="180">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

    <th style="padding: 30px 22px 0px 34px;">
          <div class="card">
            <img src="image/glv.jpg" alt="Avatar" style="width:45%">
            <div class="container">
              <h4><b>Gloves</b></h4>
              <p>₹50</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Gloves">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="50">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>
      </tr>

<!--4th row-->

         <tr>
        <th style="padding: 30px 22px 0px 44px;">
          <div class="card">
            <img src="image/selfkit.jpeg" alt="Avatar" style="height:47%">
            <div class="container">
              <h4><b>Self test kit</b></h4>
              <p>₹495</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Self test kit">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="495">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
           <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

        <th style="padding: 30px 22px 0px 34px;">
          <div class="card">
            <img src="image/hand.jpg" alt="Avatar" style="width:50%">
            <div class="container">
              <h4><b>Hand Wash(600 ml)</b></h4>
              <p>₹135</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Hand Wash(600 ml)">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="135">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
           <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

    <th style="padding: 30px 22px 0px 34px;">
          <div class="card">
            <img src="image/db.jpg" alt="Avatar" style="height:47%">
            <div class="container">
              <h4><b>Glucometer</b></h4>
              <p>₹2250</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="Glucometer">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="2250">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>

    <th style="padding: 30px 22px 0px 34px;">
          <div class="card">
            <img src="image/bp.jpeg" alt="Avatar" style="width:50%">
            <div class="container">
              <h4><b>BP Machine</b></h4>
              <p>₹1100</p>
<form method="post" action="server.php">
                     <div class="form-group">
              <input type="hidden" class="form-control" id="Product" name="Product" value="BP Machine">
            </div>  
            <div class="form-group">
              <input type="hidden" class="form-control" id="Price" name="Price" value="1100">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" id="Quantity" name="Quantity" min="1" max="20">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <button type="submit" name="test" onclick=" return confirm('Are you sure, you want to add the item to your cart?')";>Add to cart</button>
          </form>
          </div>
          </div>
        </th>
      </tr>
        </table>
        <br><br>
        <div style="background-color:#333; color:white; font-size: 15px;" align="center">
    <table>
    <tr>
    <th style="padding:25px 60px 0px 70px">
    <pre style="font-size: 15px; font-family: 'Times New Roman';">
      <span style="font-size: 20px; font-family: 'Times New Roman'; ">About Us</span><br>
      CoviTech was created amdist the corona 
      pandemic, by the students of Chandigarh
      University. This website is a one stop 
      solution for all your covid needs. Want 
      to register for covid vaccination? or need
      some covid essential goods? You can get 
      these all and many more right here at CoviTech.
    </pre>
  </th>
  <th style="padding:0px 70px 0px 70px">
      <h3 style="font-size: 20px;">Address</h3>
      <h4><i class="fas fa-map"></i>&emsp;Mohali, Punjab</h4>
      <h4><i class="fas fa-phone-alt"></i>&emsp;+91-9876542345</h4>
      <h4><i class="fas fa-envelope"></i>&emsp;abc@example.com</h4>
  </th>
  <th style="padding:0px 70px 0px 70px">
    <span style="font-size: 20px;">Connect to Us</span>
    <br><br>
    <a href="#"><span class="fab fa-facebook-f" style="font-size: 40px; color:#0ff5e9 ;"></span></a>
    &emsp;
    <a href="#"><span class="fab fa-twitter" style="font-size: 40px; color:#0ff5e9 ;"></span></a>
    &emsp;
    <a href="#"><span class="fab fa-instagram" style="font-size: 40px; color:#0ff5e9 ;"></span></a>
    &emsp;
    <a href="#"><span class="fab fa-youtube" style="font-size: 40px; color:#0ff5e9 ;"></span></a>
  </th>
</tr>
</table>
<p align="right"><font color="white" size="3">&copy; CoviTech</font></p>
<br>
</div>
</body>
</html>