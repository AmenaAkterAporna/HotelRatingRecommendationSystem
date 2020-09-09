<?php include('server.php') ?>
<!DOCTYPE html><html>
	<head>
 		<link rel="stylesheet" href="/hotelRatingSystem/MVC Pattern/View/style.css">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  		<title>Sign in</title>
	</head>

	<body>
		<div class="main">
		<p class="sign" align="center">Log-in to get started</p>
		<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<input class="un " type="text" align="center" placeholder="Username" name="username">
		<input class="pass" type="password" align="center" placeholder="Password" name="password">
		<button type="submit" a class="submit" align="center " name="login_user">Sign in</a> </button>
		<p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
		<p class="SignUP" align="center"><a href="Signup.php">Don't have account?</a></p>

	 
         </form>
	</body>
</html>



