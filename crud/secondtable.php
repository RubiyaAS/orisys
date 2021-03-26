<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
	die ("error:could not occur".mysqli_connect_error());
}
$sql="CREATE TABLE second(id int primary key,name Varchar(20),mark int(2))";
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
