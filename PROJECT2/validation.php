<?php

$link=mysqli_connect("localhost","root","","ddu");
if($link===false)
{
die("error:couldnot connect".mysqli_connect_error());
}
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from pro where email='$email' and password='$password'";
if($result=mysqli_query($link,$sql)){
if(mysqli_num_rows($result)>0)
{
echo "successfully logged in";
mysqli_free_result($result);
}

else{
echo "invalid username or password";
}
}

mysqli_close($link);
?>

