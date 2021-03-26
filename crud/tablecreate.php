<?php
$link=mysqli_connect("localhost","root","","demo");
if($link==false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="CREATE TABLE tab(id int primary key,name Varchar(50),lastname Varchar(50),emailid varchar(50))";
if(mysqli_query($link,$sql))
	{
	echo "TABLE created";
	}
	else
	{
	echo "error$sql".mysqli_error($link);
	}
	mysqli_close($link);
?>