<?php 
if(isset($_GET['user']) && $_GET['user'] == 'oliur' && isset($_GET['pass']) && $_GET['pass'] == 'oliur') 
	header("Location: welcome.php");
else if (isset($_GET['user'])) 
	header("Location: index.php"); 
?>
<!DOCTYPE html>
	<head>
		<title>Admin Panel</title>
		<base href="https://colorlib.com/etc/lf/Login_v10/">
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<div class="wrap-login100 p-t-50 p-b-90"  style="margin-left: 50px;">
			<form class="login100-form validate-form flex-sb flex-w">
				<span class="login100-form-title p-b-51" style="color: #17A589">Admin Panel</span>
				<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
					<input class="input100" type="text" name="user" placeholder="Username">
				</div>
				<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
					<input class="input100" type="password" name="pass" placeholder="Password">
				</div>
				<div class="container-login100-form-btn m-t-17">
					<button class="login100-form-btn" style="background-color: #17A589">Login</button>
				</div>
			</form>
		</div>
	</body>
</html>