<?php
//session_start();


//start session to store user that logged
session_start();
/* authors
    *Cyrus muchiri
    *Mark kariuki
    *Stanley Mandela
    */

//server details
    $serverName='localhost';
    $dbName=$_SESSION['Apartment_name'];
    $username='root';
    $password='';
 
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
                <h2 align="center">Notice Board</h2><hr/>
<?php

              //fetching notices from said username from said apartment database
            //create connection
            $conn=new mysqli($serverName,$username,$password,$dbName);
            
            $sql="SELECT topic,content,timesent from notices ORDER BY timesent DESC;";

            $Query=mysqli_query($conn, $sql);
            //passwords and usename from database
            while ($result = mysqli_fetch_assoc($Query)) {
                echo'
                <div class="row align-items-center">
                    <div class="col-md-12 notices">
                            <h5>'.$result["topic"].'</h5>
                            <p>' .$result["content"].' </p>
                            <strong>from management</strong>
                            <p align="right">'.$result["timesent"].'</p> <hr/>
                    </div>
           
                </div>
                ';

          
            }



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