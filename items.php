<?php 
include 'dbconnect/connection.php';
session_start();

if ($_GET['itemcode']) {
	$items = $_GET['itemcode'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'link-head.php';?>

</head>
<body>
<?php include 'navbar-head.php';?>
<br>
<div class="container-fluid">
<?php include 'items-container.php';?>  
        <hr>
<?php include 'footer.php';?>
</div>
<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>
<?php include 'ajax/ajaxTrx.php';?>
</body>
</html>
<script>
$(document).ready(function(){

      var downprice = $("#downprice").val();
      var downpayment = $("#dp").val();
      /*alert(downpayment);*/
    $("#downpayment").change(function(){

    });


  $("#pricelist").keyup(function(){
  $("#monthly").val($('#baseprice').val()-$('#dp').val());
  $("#monthly_installment").val($("#monthly").val() * 1.75 );
  var computation = $("#monthly_installment").val() / $("#terms").val();
  $("#mi").val(computation.toFixed(0));
  /*var compute = $("#total_monthly_installment").val();
  $("#1total_monthly_installment").val($("#total_monthly_installment").val());*/
    });

  $("#terms").change(function(){
  $("#monthly").val($('#baseprice').val()-$('#dp').val());
  $("#monthly_installment").val($("#monthly").val() * 1.75 );
  var computation = $("#monthly_installment").val() / $("#terms").val();
  $("#mi").val(computation.toFixed(0));
  });

});
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