<?php
$mysql=mysqli_connect("localhost","root","","ddu");
if($mysql===false)
{
die("Error.couldnot connect".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
  <style>
form
{
border:3px solid blue;

padding:2px;

}
h1{
color:red;
text-align:center;
}

  </style>
</head>
<?php
$name1Err=$name2Err=$addressErr=$emailErr=$passwordErr="";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(empty($name))
	$name1Err="First name is required";
else
{
	if (!preg_match ("/^[a-zA-z]*$/",$name))
	$name1Err="Only alphabets and whitespace are allowed<br>";
}
	if(empty($lname))
	$name2Err="Last name is required";
else
{
	if (!preg_match ("/^[a-zA-z]*$/", $lname) )
	$name2Err="Only alphabets and whitespace are allowed<br>";
}
	if(empty($email))
	$emailErr="email is required";
else
{  
	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	$emailErr= "Invalid email";
}
	if(empty($password))
	$passwordErr="password is required</br>";

	if(empty($name1Err)&&empty($name2Err)&&
	empty($emailErr)&&empty($passwordErr))
{
	$sql="insert into pro(name,lname,email,password)
     values('$name','$lname','$email','$password')";
	if(mysqli_query($mysql,$sql))
	header("Location:login.php");
}
}
?>

<body>
    <h1><b><u>REGISTRATION</u></b></h1>
<form method="post" action="">

			<label class="studl">First Name:</label></br><br>
		<input class="stud" type="text" name="name" placeholder="Enter Name">
	<span style="color:red"><?php echo $name1Err; ?></span></br><br>
			<label class="studl">Last Name:</label></br>
        <input class="stud" type="text" name="lname" placeholder="Enter Name">
	<span style="color:red"><?php echo $name2Err; ?></span></br><br>
			<label class="studl">Email:</label></br>
		<input class="stud" type="text" name="email" placeholder="Enter Mail">
	<span style="color:red"><?php echo $emailErr; ?></span></br><br>
			<label class="studl">Password:</label></br><br>
		<input class="stud" type="password" name="password" placeholder="Enter Password">
	<span style="color:red"><?php echo $passwordErr; ?></span></br><br>
		<input class= "sub" type="submit"  name="submit" value="Submit">
</form>
</body>
</html>
