<?php
include_once 'dbconnect/connection.php';
session_start();

date_default_timezone_set('Asia/Manila');
$logspath = fopen("ropali/logs/logs.txt", "a");

	$account_number = $_POST['account_number'];
	$password =$_POST['password'];

	$select = $conn->query("SELECT a.account_number as account_number,b.password as password,a.docstatus as docstatus 
		from sales a
		LEFT OUTER JOIN customer b on b.customer_num = a.customer_num
		where a.account_number = '$account_number'");

	$rows = mysqli_fetch_array($select);
	if ($rows['docstatus'] == 'Repossesed') {
		echo "<div class = 'alert alert-danger'>Sorry! Your account is foreclosed.</div>";	
	}
	else
	{
		if ($rows['docstatus'] == 'Deposited') {
			echo "<div class = 'alert alert-danger'>Sorry! Your account is now Deposited.</div>";	
		}
		else
		{
			if (empty($account_number) || empty($password)) 
			{
					echo "<div class = 'alert alert-danger'>Please fill up all. Thanks!</div>";			
			}
			else
			{
				if ($account_number != $rows['account_number']) 
				{
					echo "<div class = 'alert alert-danger'>Account Number is not exists</div>";
				}
				else
				{
							if($password == $rows['password'])
							{
									echo "<script>window.location.href = 'customer'</script>";
										$_SESSION['account_number'] = $account_number;
									$messages = "[" . date("Y/m/d h:i:s", time()) . "] ".$account_number." has been logged in the system!";				
								/*echo "<div class = 'alert alert-success'>Correct Password</div>";*/
							}
							else
							{
								echo "<div class = 'alert alert-danger'>Incorrect Password</div>";
							}
					}
				}
		}
}
?>