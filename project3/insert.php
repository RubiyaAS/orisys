<?php
$link=mysqli_connect("localhost","root","","ddu");
//$slid=$_POST['SL_ID'];
if($link===false)
{
die("Error:could not connect".mysqli_connect_error());
}
$n=$_POST['firstname'];
$m=$_POST['lname'];
$e=$_POST['email'];
$sql="insert into registpro(firstname,lname,email) values('$n','$m','$e')";
if(mysqli_query($link, $sql))
{
	echo "inserted successfully";
	header('location:register.php');
}

mysqli_close($link);

?>