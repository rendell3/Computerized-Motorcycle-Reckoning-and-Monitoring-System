<?php 
include 'dbconnect/connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'link-head.php';?>

</head>

<body>
<?php include 'navbar-head.php';?>
<?php include 'carousel.php';?>
<br/>

<div class="container-fluid">

<?php include 'container-fluid.php';?>  
        <hr>
<?php include 'footer.php';?>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
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