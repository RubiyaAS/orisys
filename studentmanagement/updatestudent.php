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
.a{border:1px solid;padding:20px;margin:20px;width:400px}
</style>
<body>
<form action="update.php" method="post">
<?php
$id=$_GET['id'];
$sql="select * from manage where id=$id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
?>
<div class="a">
<h1>STUDENT UPDATE</H1>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
StudentName:</br></br>
<input type="text" name="studentname" value="<?php echo $row['studentname']; ?>"></br></br>
StudentRollnumber:</br></br>
<input type="text" name="studentrollnumber" value="<?php echo $row['studentrollnumber']; ?>"></br></br>
StudentAddress:</br></br>
<input type="text" name="studentaddress" value="<?php echo $row['studentaddress']; ?>">
</textarea></br></br>
StudentEmail:</br></br>
<input type="text" name="studentemail" value="<?php echo $row['studentemail']; ?>"></br></br>
<input type="submit" value="Update">
</div>
</form>
</body>
</html>
