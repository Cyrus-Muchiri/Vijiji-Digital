<?php
    session_start();
    //senders username
    $from = $_SESSION['Username'];
    $dbName = $_SESSION['Apartment_name'];
    
    
    //dbProperties
    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    
    //Connect to the chats dB
    $conn = new mysqli($serverName, $username, $password, $dbName);
    //Identify receipient

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
                <h2 align="center">Tenant View</h2><hr/>
            </div>
        </section>
        <section>
            <div class = "container">
<?php
$conn=new mysqli($serverName,$username,$password,$dbName);
$sql = "SELECT `Username`, `Fullname`, `email`, `mobileNo`, `houseNumber` FROM `tenants`";
$Query=mysqli_query($conn, $sql);
echo ' 
    <div class = "row">
        <div class= "col-md-2">
            <h5>Username</h5>
        </div>
        <div class= "col-md-3">
            <h5>Full Name</h5>
        </div>
        <div class= "col-md-4">
            <h5>Email</h5>
        </div>
        <div class= "col-md-2">
            <h5>Mobile</h5>
        </div>
        <div class= "col-md-1">
            <h5>House</h5>
        </div><hr>
    </div>    
    ';

while ($result = mysqli_fetch_assoc($Query)) {
    echo ' 
    <div class = "row">
        <div class= "col-md-2">'
            .$result['Username'].'
        </div>
        <div class= "col-md-3">'
            .$result['Fullname'].'
        </div>
        <div class= "col-md-4">'
            .$result['email'].'
        </div>
        <div class= "col-md-2">'
            .$result['mobileNo'].'
        </div>
        <div class= "col-md-1">'
            .$result['houseNumber'].'
        </div><hr>
    </div>    
    ';
}

?>
    </body>        
    