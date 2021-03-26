<?php
$mysql=new mysqli("localhost","root","","ddu");
$user_name=$_GET['fname'];
$user_password=$_GET['password'];
$mysql->query("insert into ddjk(user_name,user_password) values ('$user_name','$user_password')");
?>