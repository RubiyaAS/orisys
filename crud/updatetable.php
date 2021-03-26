<?php
$link=mysqli_connect("localhost","root","","demo");
if($link==false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="UPDATE tab SET name='allu' WHERE id=2";
if(mysqli_query($link,$sql))
	{
	echo "UPDATED";
	}
	else
	{
	echo "error$sql".mysqli_error($link);
	}
	mysqli_close($link);
?>