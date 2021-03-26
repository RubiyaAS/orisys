<?php
$link=mysqli_connect("localhost","root","","demo");
	if($link===false)
	{
		die("error:coudnt connect".mysqli_connect_error());
		
	}
	$sql="CREATE TABLE new(id int(10),name varchar(20))";
	if(mysqli_query($link,$sql))
	{
		echo "success";
	}
	?>
	