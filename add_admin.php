<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" href="">
	<link rel="shortcut icon" type="image/x-icon" href="image/fevicon.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<style>
		.background{
			height: 100vh;
			width: 100%;
			background-image: url(image/login.gif);
			background-position: center;
			background-size: 353px;
			box-sizing: border-box;
		}
		.container{
			opacity: 0.9;
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
	<div class="background">
		<div class ="container">
		<div class = "row col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<h1>Add Admin</h1>
				</div>
				<div class=" panel-body">
					<form method="post" action="server.php">
						<?php include('errors.php'); ?>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" name="username">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password">
							<i class="far fa-eye" id="toggle" aria-hidden="true" onclick="viewPassword()"></i>
						</div>
						<button type="submit" name="add">Add Admin</button>
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