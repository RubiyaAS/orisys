<?php
$mysql=mysqli_connect("localhost","root","","company");
$name=$_POST['name'];
$dob=$_POST['date'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$state=$_POST['state'];
$district=$_POST['district'];
$block=$_POST['block'];
$village=$_POST['village'];
$password=$_POST['password'];
$passHash=password_hash($password,PASSWORD_DEFAULT);
$query="insert into register(name,dob,mail,phonenumber,state,district,block,village,password) values ('$name','$dob','$email','$phonenumber','$state','$district','$block','$village','$passHash')";
if(mysqli_query($mysql,$query)){
	echo "Successfully Registered";
	header("Location:form_reg.php");
}
else{
	echo "error. $query".mysqli_error($mysql);
}
?>