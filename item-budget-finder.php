<?php
include 'dbconnect/connection.php';
session_start();
error_reporting(0);
		$select_make = $_GET['select_make'];
		$select_budget = $_GET['select_budget'];
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'link-head.php';?>
</head>

<body>
<?php include 'navbar-head.php';?>
<br><br><br>
<div class="container-fluid">
<?php include 'item-budget-finder-container.php';?>  
        <hr>
<?php include 'footer.php';?>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

<script type="text/javascript">
  function SubmitFormData(){

    var account_number = $("#account_number").val();
    var password = $("#password").val();

    $.post("login.php",{account_number:account_number,password:password},
    function (data){
        $(".messages").html(data);
    });
}
</script>