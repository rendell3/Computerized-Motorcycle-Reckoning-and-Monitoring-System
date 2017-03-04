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
<br><br><br>
<?php include 'navbar-head.php';?>


<div class="container-fluid">

<?php include 'container-fluid_rev.php';?>  
        <hr>
<?php include 'footer.php';?>
<a href = "test.php">TEST</a>
</div>

</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
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