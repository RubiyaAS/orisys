<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
	die ("error:could not occur".mysqli_connect_error());
}

$query="select * from tab";
if(mysqli_query($link,$query))

		{
	$lastid=mysqli_insert_id($link);
	echo "last id is".$lastid;
	}
	else
	{
	echo "error$query".mysqli_error($link);
	}
	mysqli_close($link);
?>
