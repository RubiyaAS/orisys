<?php
$mysql=mysqli_connect("localhost","root","","company");
$e=$_POST['email'];
$p=$_POST['password'];
$query="select * from register where mail='$e'";
if(mysqli_query($mysql,$query))
{
	$result=mysqli_query($mysql,$query);
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		$passHash=$row['password'];
		if(password_verify($p,$passHash))
		{
			echo "Login Successfully";
		}
		else
		{
			echo "Invalid Password";
		}
	}
	else
	{
		echo "Doesn't Find This Email";
	}
}
else
{
	echo "error. $query",mysqli_query($mysql);
}