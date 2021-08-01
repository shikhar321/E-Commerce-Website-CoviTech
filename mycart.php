<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Cart</title>
	<style>
		table {
			border-collapse: collapse;
			width: 80%;
			border: 1px solid black;
			margin: auto;
		}

		th, td {
			text-align: center;
			padding: 8px;
		}
		thead{
			background-color: #0ff5e9;
		}
		tr:nth-child(even) 
		{
			background-color: rgba(0,0,0,0.7);
			color: white;
		}
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
  color: black;
  text-align: center;
  text-decoration: none;
  size: 20px;
}

li a:hover:not(.active) {
  background-color: #111;
}
	.bee{
  color:white;
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
	</style>
</head>
<body style="margin: 0; font-family: Helvetica;">
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
	<div>
		<br><br>
	<h2 align="center">MY CART</h2>	
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>PRODUCT</th>
			<th>QUANTITY</th>
			<th>PRICE(per item)</th>
			<th>EMAIL ID</th>
			<th>Remove Item</th>
		</tr>
	</thead>
    <tbody>
	<?php
	$u =  $_SESSION['email'];
	$query="SELECT * FROM testing WHERE Email='$u'";
	$user_result=mysqli_query($db,$query);
	while($user_fetch=mysqli_fetch_assoc($user_result))
	{
		echo"
	  <tr>
	    <td>$user_fetch[id]</td>
	    <td>$user_fetch[Product]</td>
	    <td>$user_fetch[Quantity]</td>
	    <td>$user_fetch[Price]</td>
	    <td>$user_fetch[Email]</td>
	    <td><a href='delete.php?rn=$user_fetch[id]'>Remove</td>
	  </tr>
	  ";
	}

	?>
	

</tbody>
</table>
</div>
<br><br><br>
<form method="post" action="server.php" align="center">
	<button type="submit" name="po">Place order</button>
	</form>
</body>
</html>