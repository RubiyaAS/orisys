<?php
$link=mysqli_connect("localhost","root","","project");
if($link===false)
{
	die ("error:could not occur".mysqli_connect_error());
}
?>
<html>
<head>
<title></title>
</head>
<style>

</style>
<body>
<form action="editaction.php" method="post">
<?php
$id=$_GET['id'];
$sql="select * from manage where id=$id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
?>
<div class="a">
<h1>edit</h1>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
studentname:</br></br>
<input type="text" name="studentname" value="<?php echo $row['studentname']; ?>"></br></br>
studentrollnumber:</br></br>
<input type="text" name="studentrollnumber" value="<?php echo $row['studentrollnumber']; ?>"></br></br>
studentaddress:</br></br>
<input type="text" name="studentaddress" value="<?php echo $row['studentaddress']; ?>">
</br></br>
studentemail:</br></br>
<input type="email" name="studentemail" value="<?php echo $row['studentemail']; ?>">
</br></br>

<input type="submit" value="edit">
</div>
</form>
</body>
</html>

