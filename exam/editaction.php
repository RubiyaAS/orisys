<?php
$link=mysqli_connect("localhost","root","","project");
if($link==false)
{
die("error:could not connect".mysqli_connect_error());
}
$id=$_POST['id'];
$studentname=$_POST['studentname'];
$studentrollnumber=$_POST['studentrollnumber'];
$studentaddress=$_POST['studentaddress'];
$studentemail=$_POST['studentemail'];

$sql="update manage set studentname='$studentname',studentrollnumber='$studentrollnumber',studentaddress='$studentaddress',studentemail='$studentemail' where id=$id"; 
if(mysqli_query($link,$sql))
	{
	echo "VALUE edit";
	header("location:tablee.php");
	}
	else
	{
	echo "error$sql".mysqli_error($link);
	}
	mysqli_close($link);
?>
