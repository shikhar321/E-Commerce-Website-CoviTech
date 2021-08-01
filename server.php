<?php
session_start();

// initializing variables
$email    = "";
$username = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $Lastname = mysqli_real_escape_string($db, $_POST['Lastname']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $DOB = mysqli_real_escape_string($db, $_POST['DOB']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $num = mysqli_real_escape_string($db, $_POST['num']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($Lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($DOB)) { array_push($errors, "DOB is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($num)) { array_push($errors, "Phone Number is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password_e = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO users (firstname, Lastname, gender, DOB, email, address, password, num) 
          VALUES('$firstname','$Lastname','$gender','$DOB','$email', '$address', '$password_e', $num)";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "<script> alert('Congratulations! You are successfully registered'); </script>";
  
    header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email; 
     
  	$_SESSION['success'] = " <script> alert('You are now logged in'); </script> ";
  	  header('location: manage_cart.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

//Admin login

if (isset($_POST['login_admin'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;

    $_SESSION['success'] = "<script> alert('You are now logged in'); </script>";
      header('location: cart1.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

//Add Admin

if (isset($_POST['add'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

    
    $query = "INSERT INTO admin (username, password) values ('$username','$password')";
    $results = mysqli_query($db, $query);

    $_SESSION['success'] = "<script> alert('Admin succesfully added'); </script>";
      header('location: cart1.php');
  }

   //PLACE ORDER
if (isset($_POST['test'])) {
  // receive all input values from the form
  $Product = mysqli_real_escape_string($db, $_POST['Product']);
  $Price = mysqli_real_escape_string($db, $_POST['Price']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $address= mysqli_real_escape_string($db, $_POST['address']);
  $Quantity = mysqli_real_escape_string($db, $_POST['Quantity']);
  
 
  $query = "INSERT INTO testing (Product, Price, Email, Quantity) 
          VALUES('$Product','$Price','$Email','$Quantity')";
    mysqli_query($db, $query);
    $_SESSION['success']="<script> alert('Item succesfully added to your cart'); </script>";
    header('location: manage_cart.php');
   }

//PLACE ORDER
if (isset($_POST['po'])) {
  // receive all input values from the form
  $u = $_SESSION['email'];
  $query = "INSERT INTO orders (Product, Price, Email, Quantity) SELECT Product, Price, Email, Quantity FROM testing where Email='$u'";
    mysqli_query($db, $query);
  $_SESSION['success']="<script> alert('Congratulations! Your order has been successfully placed'); </script>";
  $clear = "DELETE FROM testing where Email='$u'";
     mysqli_query($db, $clear);

    $_SESSION['success']="<script> alert('Congratulations! Your order has been successfully placed'); </script>";
    header('location: manage_cart.php');
   }
   ?>