<?php 


include "check_if_logged_in.php";

require "../includes/db.php";



// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header('Location: ../index.php');


 ?>