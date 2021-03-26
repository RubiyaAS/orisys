<html>
<head>
</head>
<body>
  <form action="update_data.php" method="post">
<?php
 $mysql=new mysqli("localhost","root","","ddu");
$user_id=$_GET['id'];
$query=$mysql->query("select * from ddjk where user_id=$user_id");
$row=$query->fetch_assoc();
	
  ?>
		<input type='hidden' name='id' value=".$row['user_id'].">
		Name :<input type='text' name='name' value=".$row['user_name']."></br>
	    Password:<input type='text' name='pwd' value=".$row['user_password']."></br>
  <input type="submit" name="update" value="Update">
  </form>
</body>
</html>