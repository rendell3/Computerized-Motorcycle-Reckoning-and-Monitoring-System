<?php
include '../dbconnect/connection.php';
	$select_brands = $_POST['select_brands'];


	$sel = $conn->query("SELECT brand_code,itemcode from item_masterdata where brand_code = '$select_brands' ");
	while ($rows = mysqli_fetch_array($sel)) 
	{
		echo "<option value = ".$rows['brand_code'].">".$rows['itemcode']."</option>";
	}
?>