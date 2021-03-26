<?php
$link=mysqli_connect("localhost","root","","ddu");
if($link==false)
{
die("error:could not connect".mysqli_connect_error());
}
$id=$_GET['id'];
	$query=("delete from registpro where (id=$id)");
	if(mysqli_query($link,$query))
	{
		header("Location:register.php");
	}
	mysqli_close($link);
?>