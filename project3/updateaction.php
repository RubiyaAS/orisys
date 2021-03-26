<?php
$link=mysqli_connect("localhost","root","","ddu");
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
<form action="updatee.php" method="post">
<?php
$id=$_GET['id'];
$sql="select * from registpro where id=$id";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
?>
<div class="a">
<h1>UPDATE</h1>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
firstname:</br></br>
<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"></br></br>
lname:</br></br>
<input type="text" name="lname" value="<?php echo $row['lname']; ?>"></br></br>
email:</br></br>
<input type="email" name="email" value="<?php echo $row['email']; ?>">
</br></br>

<input type="submit" value="Update">
</div>
</form>
</body>
</html>
