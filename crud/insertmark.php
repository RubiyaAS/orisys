<?php
$link=mysqli_connect("localhost","root","","demo");
if($link==false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="INSERT INTO second(id,name,mark)VALUES(19,'ouy','30'),(18,'skn','40'),(90,'fy','50')";
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