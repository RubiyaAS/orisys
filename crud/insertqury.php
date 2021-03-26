<?php
$link=mysqli_connect("localhost","root","","demo");
if($link==false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="INSERT INTO tab(id,name,lastname,emailid)VALUES(10,'appu','p','p@gmail.com')";
if(mysqli_query($link,$sql))
	{
	echo "TABLE inserted";
	}
	else
	{
	echo "error$sql".mysqli_error($link);
	}
	mysqli_close($link);
?>