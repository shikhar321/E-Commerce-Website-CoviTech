<?php 
include('server.php')
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order Manager</title>
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
	</style>
</head>
<body style="margin: 0; font-family: Helvetica;">
	<ul>
	<li><a href="add_admin.php" target="_blank" style="padding: 30px 20px 20px 20px;" class="bee">ADD ADMIN</a></li>
		<li><a href="index.php" target="_blank" style="padding: 30px 20px 20px 20px;" class="bee">HOME</a></li>
		<li style="float: left; margin-left: 15px;"><img src = "image/fevicon.jpg" height="70px" width="70px"></li>
  <li style="padding: 20px 380px 0px 0px; float: left; margin-left: 5px;"><font size="6" color="white">CoviTech</font></li>
	  </ul>
	<br><br><br><br><br><br>
<div>
<h2 align="center">ORDER MANAGER</h2>	
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>PRODUCT</th>
			<th>QUANTITY</th>
			<th>PRICE(per item)</th>
			<th>EMAIL ID</th>
			<th>ADDRESS</th>
			<th>ACTION</th>
		</tr>
	</thead>
    <tbody>
	<?php
	$query="SELECT ord.*, ur.address FROM orders ord, users ur where ord.email = ur.Email";
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
	    <td>$user_fetch[address]</td>
	    <td><a href='delete_admin.php?mn=$user_fetch[id]'>Cancel Order</td>
	  </tr>
	  ";
	}
	?>

</tbody>
</table>
</div>
</body>
</html>