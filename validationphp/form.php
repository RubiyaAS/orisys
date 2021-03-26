<?php
$nameerror="";
$emailerror="";
$email=$name="";
if(isset($_POST['submit']))
{
if(empty($_POST["name"]))
{
	$nameerror="required name";
}
else
{
		 $name=$_POST["name"];
		// echo $name ."</br>";
		 if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		  $nameerror= "Only letters and white space allowed";
}
}
}
if(isset($_POST['submit']))
{

if(empty($_POST["email"]))
{
	 $emailerror= "required email";
}
else
{
	   $email=$_POST["email"];
	   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailerror ="invalid email";
}
else 
{
		 echo $email;
}
}
     
}
?>
<html>
<head>
<title>Student Detail Form</title>
<style>
input {
        padding:10px;
		margin:10px;
	  }

</style>
</head>
<body>
<form action="form.php" method="post">
<h1>Registration Form</h1>
	 name:</br><input type="text" name="name" value="<?php echo $name;?>"> 
	 <span class="error">*<?php echo $nameerror;?></span></br>
	Email:</br><input type="text" name="email" value="<?php echo $email;?>"> 
	 <span class="error">*<?php echo $emailerror;?></span></br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>