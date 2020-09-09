<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="/hotelRatingSystem/MVC Pattern/View/Signupstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign up</title>
</head>


<body>

  <form method="post" action="signup.php" style="border:1px solid #ccc">
    <?php include('errors.php'); ?>
    <div class="main">

      <h1 class="sign" align="center">Sign Up</h1>
      <p style="color:#000000" , align="center">Please fill in this form to create an account.</p>
      <hr>
      <form class="form1">
        <input style="background-color: white" class="name" type="text" name="name" align="center" placeholder="Name" value="<?php echo $name; ?>">
        <input style="background-color: white" class="un " type="text" name="username" align="center" placeholder="Username" value="<?php echo $username; ?>">
        <input style="background-color: white" class="email" type="text"  align="center" placeholder="Enter Email"
          name="email" value="<?php echo $email; ?>">



        <input style="background-color: white" class="pass" type="password" align="center" placeholder="Enter Password"
          name="password_1">


        <input style="background-color: white" class="pass-repeat" type="password" align="center"
          placeholder="Repeat Password" name="password_2">
        <br>
        <!-- <input class="checkbox" checked="checked" placeholder="Remember me" name="remember" style="margin-bottom:15px">   -->
        <label style="margin-left: 10px"><input type="checkbox" checked="checked" name=""> remember me</label><br>

        <p style="margin-left: 10px">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms
            & Privacy</a>.</p>

        <div class="clearfix" style="margin-left: 10px">
          <button type="button" class="cancelbtn"> <a href="login.php"> Signin</button>
          <button type="submit" class="signupbtn" name="reg_user"> Sign Up</button></a>
        </div>
    </div>




  </form>
</body>

</html>