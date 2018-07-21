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
   
    $topic=$_POST['topic'];

    $content=$_POST['content'];

 
//create connection
    $conn=new mysqli($serverName,$username,$password,$dbName);
            
    $sql="INSERT into notices (topic,content) values ('$topic' ,'$content');";
    
    if (mysqli_query($conn, $sql)){
        echo '<div>Notice Created<div>';
    
    }
    else {
        echo' An error was encountered while creating your notice'. mysqli_error($conn) ;
        
    }
        

    


?>
