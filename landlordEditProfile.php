<?php
session_start();
?>
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
/* authors
    *Cyrus muchiri
    *Mark kariuki
    *Stanley Mandela
    */

//apartment name is also the name of thed database so we have to get if fast
    $apartmentName=$_SESSION['Apartment_name'];
//server details
    $serverName='localhost';
    $dbName=$apartmentName;
    $username='root';
    $password='';

//variables to store data from form
    
   
    $landlorduserName=$_SESSION['Username'];
    $landlordMobileNo=$_POST['LandlordNo'];
    $landlordEmail=$_POST['landlordemail'];
   
    

 
  
    
//fetching password from said username from said apartment
 //create connection
 $conn=new mysqli($serverName,$username,$password,$dbName);


 //sql statement
     $sql="UPDATE landlord
      SET mobileNo='$landlordMobileNo',
      email='$landlordEmail'  WHERE Username='$landlorduserName'";

    
 
     if (mysqli_query($conn, $sql))
     {
        echo "Update Successful";

     }
     else
     { echo "FAILED!". mysqli_error($conn);

    echo $apartmentName;} 
     

    
 ?>