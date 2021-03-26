<?php
$link=mysqli_connect("localhost","root","","ddu");
//$slid=$_POST['SL_ID'];
if($link===false)
{
die("Error:could not connect".mysqli_connect_error());
}
$n=$_POST['name'];
$e=$_POST['email'];
$sql="insert into pro(name,email) values('$n','$e')";
if(mysqli_query($link, $sql))
{
	echo "inserted successfully";
	header('location:form.php');
}

mysqli_close($link);

?>