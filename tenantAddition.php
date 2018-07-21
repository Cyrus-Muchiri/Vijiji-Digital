<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Vijiji Digital</title>
	
    <link rel="icon" href="images/vdLogo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/select2.css">
    

    <link rel="stylesheet" href="css/helpers.css">
    <link rel="stylesheet" href="css/style.css">

	</head>
<?php

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

//variables to store data from form
   
    $tenantName=$_POST['tenantUserName'];

    $Userpassword=hash('sha512',$_POST['tenantPassword']);

   
 
 //check if password matches

 
        //create connection
            $conn=new mysqli($serverName,$username,$password,$dbName);
                   
            $sql="INSERT into tenants (Username,userpassword) values ('$tenantName' ,'$Userpassword');";
            
            if (mysqli_query($conn, $sql)){
                echo '<div class="container">
                        <div class="row">
                    
                        <div class="col-md-8" bgcolor="green" >
                         Tenant added successfuly
                        </div>
                        </div>
                        </div>
                        ';
            
            }
            else {
                echo' An error was encountered'. mysqli_error($conn) ;
                               
            }
     
?>
