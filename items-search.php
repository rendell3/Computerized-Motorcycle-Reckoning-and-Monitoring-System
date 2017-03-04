<?php
include 'dbconnect/connection.php';
session_start();
error_reporting(0);
		$select_brands = $_GET['select_brands'];
		$select_model = $_GET['select_model'];
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
<?php include 'item-search-fluid.php';?>  
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