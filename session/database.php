<?php
$link=mysqli_connect("localhost","root","","session");
if($link===false)
{
die("Error could not connect".mysqli_connect_error());
}
?>