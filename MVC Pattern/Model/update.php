<!DOCTYPE html>
<html>
    <head>
        <title> Update </title>
        <link rel = "stylesheet" type="text/css" href="/hotelRatingSystem/MVC Pattern/View/updateStyle.css">
    </head>
    <body>
        <h1> What do you want to do ? </h1>
    <div class = "update">
    <form method = "post">
    <div class="search-box1"> 
            <input class ="search-txt" type = "text" name="box1" placeholder="Old Password">
        </div>
        <div class="search-box2">
             <input class ="search-txt" type = "text" name="box2" placeholder="New Password"><br>
         </div>
         <div class="search-box3">
             <input class ="search-txt" type = "text" name="box3" placeholder="Confirm Password">
        </div>
    <button type="submit" a class="search-btn"  name="updatebutton">Update Password</button> </a>
    </form>
        </div>
    
        <div class = "delete">
    <form method="post">
    <div class="search-box4">
             <input class ="search-txt" type = "text" name="box4" placeholder="Password">
             </div>
             <div class="search-box5">
             <input class ="search-txt" type = "text" name="box5" placeholder="Hotel Name">
       </div>
               <button type="submit" a class="search-btn"  name="deletebutton">Delete Rating</button> </a>
        
    </form>
        </div>
        <?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

  // initializing variables
$username = "";
$email    = "";
$name = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hotelratingsystem');

  if(isset($_POST['updatebutton'])){
  $oldpass = mysqli_real_escape_string($db, $_POST['box1']);
  $newpass1= mysqli_real_escape_string($db, $_POST['box2']);
  $newpass2= mysqli_real_escape_string($db, $_POST['box3']);
  if($newpass1!=$newpass2){
    echo "Password don't match";
  }else{
  $user=$_SESSION['username'];
  $sql = "UPDATE users set password = '$newpass1' where username = '$user' and password= '$oldpass' ";
  $result = mysqli_query($db, $sql);
  }
}
  if(isset($_POST['deletebutton'])){
  $pass = mysqli_real_escape_string($db, $_POST['box4']);
  $hotel = mysqli_real_escape_string($db, $_POST['box5']);
  $sql = "DELETE from stars where hotel = '$hotel' and user = (SELECT username from users where password ='$pass') ";
  $result1 = mysqli_query($db, $sql);
  }
  ?>

    </body>
</html>