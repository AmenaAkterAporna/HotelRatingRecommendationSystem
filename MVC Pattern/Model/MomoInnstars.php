<?php
    $hotel="MomoInn";

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
  $user=$_SESSION['username'];
    $conn = new mysqli('localhost', 'root', '', 'hotelratingsystem');


    if (isset($_POST['save'])) {
        $uID = $conn->real_escape_string($_POST['uID']);
        $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;
        
        $sql = "SELECT user, hotel FROM stars WHERE user='$user' AND hotel='$hotel' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        
        $userx = mysqli_fetch_assoc($result);
      
        //$hotelx = mysqli_fetch_assoc('hotel');

        if (!$userx) {
            $conn->query("INSERT INTO stars (rateIndex,user,hotel) VALUES ('$ratedIndex','$user','$hotel')");
            
        } else
            $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE user='$userx[user]' and hotel='$hotel'");

        //exit(json_encode(array('id' => $uID)));
    }

    $sql = $conn->query("SELECT starid FROM stars Where hotel='MomoInn'");
    $numR = $sql->num_rows;

    $sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars Where hotel='MomoInn'");
    $rData = $sql->fetch_array();
    $total = $rData['total'];

    $avg = round(($total / $numR),2);
    

    $conn->query("UPDATE hotels SET rating='$avg' WHERE hotelname='MomoInn'");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating System</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div align="center" style="background: #000; padding: 50px;color:white;">
        <i class="fa fa-star fa-2x" data-index="0"></i>
        <i class="fa fa-star fa-2x" data-index="1"></i>
        <i class="fa fa-star fa-2x" data-index="2"></i>
        <i class="fa fa-star fa-2x" data-index="3"></i>
        <i class="fa fa-star fa-2x" data-index="4"></i>
        <br><br>
        <?php echo "User Rating ".round($avg,2) ?>
        <br><br>
        <?php echo "No of User Rated ".$numR ?>
    </div>

    <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "MomoInnstars.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'red');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
    </script>

<?php include 'MomoInn.php';?>
</body>
</html>