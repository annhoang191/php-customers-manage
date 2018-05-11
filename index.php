<?php
  require("connect_db.php");
  session_start();
  if (isset($_SESSION['login_user']) && $_SESSION['login_user'] == true) {

  } else {
    header('Location: login.php');
  }
?>

<!DOCTYPE HTML>
<html>
    <head>
      <title>Quản lý khách hàng</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="image/favicon.ico" type="image/x-icon" sizes="16x16">
      <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
    </head>

    <body>
      <?php include("header.php"); ?>
      <?php include("sidebar.php"); ?>
      <?php include("table_customer.php"); ?>
      <?php include("footer.php"); ?>
      <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
