<?php
//This file should logout the user(landlord or tenant) and return them to index.html
//End all sessions
session_start();
//set ($_SESSION['logged_in']);
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
header("location: index.html");


?>