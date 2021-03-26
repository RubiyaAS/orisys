<?php
$link="mysqli_connect"("localhost","root","");
if($link===false)
{
	die("error:could not connect".mysqli_connect_error());
}
	echo "connect succesfully".mysqli_get_host_info($link);
?>