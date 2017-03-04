
<script type="text/javascript">
  function SubmitFormData(){

    var username = $("#username").val();
    var password = $("#password").val();

    $.post("login.php",{username:username,password:password},
    function (data){
        $(".messages").html(data);
    });
    
 
}
</script>