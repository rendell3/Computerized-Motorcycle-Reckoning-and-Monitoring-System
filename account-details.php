<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['account_number'])) 
{
 header("location:index");
  /*echo $_SESSION['roles']." ";
  echo $_SESSION['role'] ;
  echo $_SESSION['role'] == 'Sales';
  echo isset($_SESSION['username']);*/
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'wheeltek/shortcut-link/header.php';?>
    
  </head>

  <body class="nav-md">
      <?php include 'account-details-container.php';?>
  
    <?php include 'wheeltek/shortcut-link/footer.php';?>
  </body>
    <?php include 'wheeltek/shortcut-link/footer-script.php';?>
</html>
