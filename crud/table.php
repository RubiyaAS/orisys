<?php
$link=mysqli_connect("localhost","root","");
if($link===false)
{
	die("error:could not connect".mysqli_connect_error());
}
$sql=("CREATE DATABASE demo");
if(mysqli_query($link,$sql))
	{
	echo "Database created";
	}
	else
	{
	echo "error$sql".mysqli_error($link);
	}
	mysqli_close($link);
?>