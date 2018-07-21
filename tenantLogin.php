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
    $apartmentName=$_POST['apartmentName'];
//server details
    $serverName='localhost';
    $dbName=$apartmentName;
    $username='root';
    $password='';

//variables to store data from form
    
    $tenantName=$_POST['tenantUserName'];
    

 //encrypting passwords
    $tenantPassword= hash('sha512',$_POST['tenantPassword']);
    

 //fetching password from said username from said apartment
 //create connection
 $conn=new mysqli($serverName,$username,$password,$dbName);


 //sql statement
     $sql="SELECT Username,userpassword from tenants WHERE Username='$tenantName'";

     $Query=mysqli_query($conn, $sql);
     //passwords and usename from database
     while ($result = mysqli_fetch_assoc($Query)) {
        $dbUserName=$result['Username'];
        $dbPassword=$result['userpassword'];
     }
 //check if password matches

 if($tenantName==$dbUserName&&$tenantPassword==$dbPassword){
     //session variable
     $_SESSION['Apartment_name'] = $dbName;
     $_SESSION['Username'] = $tenantName;
     $_SESSION['active'] = true;

    

    //proceed to tenants page
    

    header("location:tenant.php");
 }else{
     echo "Wrong username or password";
 }


 ?>