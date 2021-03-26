<?php
$link=mysqli_connect("localhost","root","","ddu");
//$slid=$_POST['SL_ID'];
if($link===false)
{
die("Error:could not connect".mysqli_connect_error());
}
$n=$_POST['name'];
$m=$_POST['lname'];
$e=$_POST['email'];
$p=$_POST['password'];
$sql="insert into pro(name,lname,email,password) values('$n','$m','$e','$p')";
if(mysqli_query($link, $sql))
{
	echo "inserted successfully";
	header('location:login.php');
}

mysqli_close($link);

?>