<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" href="">
	<link rel="shortcut icon" type="image/x-icon" href="image/fevicon.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<style>
		.Background{
			height: 100vh;
			width: 100%;
			background-image: url(image/monophy.gif);
			background-position: center;
			background-size: 353px;
			box-sizing: border-box;
		}
		.container{
			opacity: 0.9;
		}
		input:invalid {
			border-color: red;
		}
		#toggle {
			float: right;
			margin-right: 5px;
			margin-top: -25px;
			z-index: 2;
		}
	</style>
</head>
<body>
	<div class="Background">
	<div class ="container">
		<div class = "row col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<h1>Registration Form</h1>
				</div>
				<div class=" panel-body">
					<form method="post" action="registration_page.php">
						<div class="form-group">
							<label for="firstname">First Name</label>
							<input type="text" class="form-control" id="firstname" name="firstname" placeholder="FirstName" pattern="[a-zA-Z]{1,20}" title="Firstname should only contain lowercase and uppercase letters. e.g. rahul">
						</div>	
						<div class="form-group">
							<label for="Lastname">Last Name</label>
							<input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="LastName" pattern="[a-zA-Z ]{1,20}" title="Lastname should only contain lowercase and uppercase letters and blank space. e.g. kumar gupta">
						</div>
						<div class="form-group">
							<label for="gender">Gender</label>
							<div>
								<label for="male" class="radio-inline"><input type="radio" name="gender" id="male" value="M">Male</label>
								<label for="male" class="radio-inline"><input type="radio" name="gender" id="female" value="F">Female</label>
								<label for="male" class="radio-inline"><input type="radio" name="gender" id="others" value="O">Others</label>
							</div>
						</div>
						<div class="form-group"> 
							<label for="DOB">DOB</label>
							<input type="date" name="DOB" id="DOB" class="form-control">
						</div>

						<div class="form-group">
						<label for="email">Email Address</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="username@domainname.domain">
                        </div>

                       <div class="form-group">
							<label for="address">Address</label>
							<input type="text" class="form-control" id="address" placeholder="Address" name="address">
						</div>	

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" pattern=".{8,}" title="Password should be of minimum 8 characters. e.g. 12345678">
							<i class="far fa-eye" id="toggle" aria-hidden="true" onclick="viewPassword()"></i>
						</div>
						
						<div class="form-group">
							<label for="number">Phone Number </label>
							<input type="tel" class="form-control" id="number" name="num" placeholder="Phone number" pattern="[0-9]{10}" title="Phone number should be of 10 digits. e.g. 7894561230">
						</div>

						<button type="submit" name="reg_user">Register</button>
						<p>
  		                 Already an user? <a href="login_page.php">Log In</a>
  	                     </p>
					</form>
				</div>
				<div class=" panel-footer text-right">
					<small>&copy; CoviTech</small>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function viewPassword(){
		var passwordInput = document.getElementById('password');
		var passStatus = document.getElementById('toggle');
		
		if (passwordInput.type == 'password'){
			passwordInput.type='text';
			passStatus.className='fa fa-eye-slash';
		}
		else{
			passwordInput.type='password';
			passStatus.className='fa fa-eye';
		}
	}
</script>
</body>
</html>