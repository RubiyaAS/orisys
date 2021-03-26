<?php
$link=mysqli_connect("localhost","root","","project");
if($link==false)
{
die("error:could not connect".mysqli_connect_error());
}
$id=$_GET['id'];
	$query=("delete from manage where (id=$id)");
	if(mysqli_query($link,$query))
	{
		header("Location:displydetails.php");
	}
	mysqli_close($link);
?>