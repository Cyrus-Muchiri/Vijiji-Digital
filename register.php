<?php
/* authors
    *Cyrus muchiri
    *Mark kariuki
    *Stanley Mandela
    */
    
    session_start();
    $apartmentName=$_POST['apartmentName'];
//server details
    $serverName='localhost';
    $dbname=$apartmentName;
    $username='root';
    $password='';

//variables to store data from form
   
    $landlordName=$_POST['landlordName'];
    $emailAddress=$_POST['landlordEmail'];
    $mobileNo=$_POST['landlordMobile'];

    //encrypting passwords
    $landlordPassword= hash('sha512',$_POST['landlordPassword']);
    $confirmPassword=hash('sha512',$_POST['landlordConfirmPassword']);

 
 //check if password matches

 if($landlordPassword==$confirmPassword){
        //create connection
            $conn=new mysqli($serverName,$username,$password);
        //CREATE Database
            $sql="CREATE Database $apartmentName ;";
            mysqli_query($conn, $sql);

            $manipulationConn=new mysqli($serverName,$username,$password,$dbname);
        //create tables

        //minor error here
            $sql=" CREATE table landlord ( Username varchar(255), userpassword varchar(255), email varchar(255), mobileNo varchar(255) );";
            mysqli_query($manipulationConn, $sql);
            $sql="CREATE table tenants ( Username varchar(255), Fullname varchar(255), userpassword varchar(255), email varchar(255), mobileNo varchar(255), houseNumber varchar(255), PRIMARY KEY(username));";
            mysqli_query($manipulationConn, $sql);
            $sql="CREATE table chat (UserFrom varchar(255), UserTo varchar(255), textMessage varchar(255),timeSent timestamp);";
            mysqli_query($manipulationConn, $sql); 
            $sql="CREATE table notices (Topic varchar(100), content varchar(255),timeSent timestamp);";
            mysqli_query($manipulationConn, $sql);           
            $sql="INSERT into landlord (Username,userpassword,email,mobileNo ) values ('$landlordName' ,'$landlordPassword','$emailAddress','$mobileNo');";
            if ( mysqli_query($manipulationConn, $sql)){
                echo 'Apartment created successfuly';
                $_SESSION['active'] = true;
                $_SESSION['Apartment_name'] = $apartmentName;
                $_SESSION['Username'] = $landlordName;
                header("location:landlord.php");
            }
            else {
                echo' An error was encountered'. mysqli_error($conn) ;
                echo' An error was encountered'. mysqli_error($manipulationConn) ;
            }
        }

    else{
        echo 'Passwords do not match';
        }


?>
 

