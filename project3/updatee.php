<?php
$link=mysqli_connect("localhost","root","","ddu");
if($link==false)
{
die("error:could not connect".mysqli_connect_error());
}
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$sql="update registpro set firstname='$firstname',lname='$lname',email='$email' where id=$id"; 
if(mysqli_query($link,$sql))
	{
	echo "VALUE updated";
	header("location:register.php");
	}
	else
	{
	echo "error$sql".mysqli_error($link);
	}
	mysqli_close($link);
?>