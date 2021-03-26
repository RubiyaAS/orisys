<?php
	session_start();
 require('database.php');
 $username=$_POST['username'];
 $password=$_POST['password'];
 $sql="select * from tblogin where username='$username' and password='$password'";
 if($res=mysqli_query($link,$sql));
 foreach($res as $row)
 {
	 $id=$row['id'];
 }
 $_SESSION['logid']=$id;
 header('location:home.php');
 
?>



