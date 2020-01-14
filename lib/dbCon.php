<?php
$con = mysqli_connect("localhost","root","","khoaphamtraining");
if (!$con)
{
	die("Connection Failed:".mysqli_connect_error());
}
//echo "Connection successfully";
mysqli_set_charset($con, 'UTF8');	
?>