<?php
$mysql=new mysqli("localhost","root","","ddu");
$user_name=$_POST['name'];
$user_age=$_POST['age'];
$user_email=$_POST['email'];
$user_name=$_POST['username'];
$user_password=$_POST['password'];
$user_passcnf=$_POST['passcnf'];
$mysql->query("insert into reg(name,age,email,username,password,passcnf) values ('$user_name',
'$user_age','$user_email','$user_name','$user_password','$user_passcnf')");
?>