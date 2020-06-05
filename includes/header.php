<?php 
ob_start();

session_start();


error_reporting(0);





if(!isset($_SESSION['client_id']) AND $_SESSION['client_id'] == '')

// if(!isset($_SESSION['client_id']) OR !isset($_SESSION['user_id']) )
{

  header('Location:index.php');
 
}







include "includes/functions.php";


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Omega Trade System</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="plugins/chartist/css/chartist.min.css">
    <link href="plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">    
    <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

</head>

<body style="background-image: linear-gradient(90deg, #002F47, #002F47);">