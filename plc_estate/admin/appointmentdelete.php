<?php
include("config.php");
$cid = $_GET['id'];
$sql = "DELETE FROM appointment WHERE cid = {$cid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Contact Deleted</p>";
	header("Location:appointment.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Contact Not Deleted</p>";
	header("Location:appointment.php?msg=$msg");
}
mysqli_close($con);
?>
