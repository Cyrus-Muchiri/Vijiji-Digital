<?php
session_start();
//senders username
$from = $_SESSION['Username'];
$dbName = $_SESSION['Apartment_name'];


//dbProperties
$serverName = 'localhost';
$username = 'root';
$password = '';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="60" > 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vijiji Digital</title>
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">


    <!--stylesheets-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/noticeboard.css">
    </head>
    <body>
        <!--section for notice board-->
       <section>
            <div class ="container">
                <h2 align="center">Chats</h2><hr/>
<?php
                //fetching landlord username
            $conn=new mysqli($serverName,$username,$password,$dbName);
            
            $sql="SELECT Username from landlord ;";

            $Query=mysqli_query($conn, $sql);
           
 ?>
            
           
        </section>
    <!--scripts-->
    <script src="js/jquery.min.js"></script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script src="js/select2.min.js"></script>

    <script src="js/main.js"></script>
    </body>

</html>