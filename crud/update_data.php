<?php
    $mysql=new mysqli("localhost","root","","ddu");
	$user_id=$_POST['id'];
	$uname=$_POST['name'];
	$pwd=$_POST['pwd'];
$query=$mysql->query("update ddjk set user_name='$uname',user_password='$pwd' where user_id='$user_id'");
?>	
	