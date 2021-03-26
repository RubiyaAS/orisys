<?php
$link=mysqli_connect("localhost","root","","project");
if($link==false)
{
die("error:could not connect".mysqli_connect_error());
}
$id=$_POST['id'];
$name=$_POST['studentname'];
$rollnumber=$_POST['studentrollnumber'];
$address=$_POST['studentaddress'];
$email=$_POST['studentemail'];
$sql=("insert into manage(id,studentname,studentrollnumber,studentaddress,studentemail) values 
('$id','$name',$rollnumber,'$address','$email')");
if(mysqli_query($link,$sql))
	{
	echo "VALUE inserted";
	header("Location:displydetails.php");
	}
	else
	{
	echo "error$sql".mysqli_error($link);
	}
	mysqli_close($link);
?>
