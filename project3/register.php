
<html>
<head>
<title></title>
<style>
 body{margin:2px;border:1px solid;
border-collapse:collapse;width:600px;height:900px;
padding:20px;text-align:center;
}
</style>
<body>
<form action="insert.php" method="post">
<h1>INSERT AND VIEW</h1>
firstname:<input type="firstname" name="firstname"><br><br>
lname:<input type="lname" name="lname"><br><br>
email:<input type="email" name="email"><br><br>
<input type="submit" value="submit">
</form>
</body>
</html>

<html>
<head>
<title></title>
</head>
<style>
table,th,td{border-collapse:collapse;border:1px solid #ff0000;padding:15px;}
</style>
<body>
<form action="insert.php" method="post">
<table>
<thead>
<tr>
<th>id</th>
<th>firstname</th>
<th>lname</th>
<th>email</th>
<th>view</th>
<th>update</th>
<th>delete</th>
</tr>
</thead>
<?php
$link=mysqli_connect("localhost","root","","ddu");
if($link===false)
{
die("Error:could not connect".mysqli_connect_error());
}
$query=$link->query("select * from registpro");
while($row=$query->fetch_assoc())
{	
echo "<tr><td>".$row['id']."</td><td>".$row['firstname']."</td><td>".$row['lname']."</td><td>".$row['email']."</td><td><a href=view.php?id=".$row['id'].">view</a></td><td><a href=updateaction.php?id=".$row['id'].">update</a></td><td><a href=deleteaction.php?id=".$row['id'].">delete</a></td></tr>";

}
?>

</table>
</body>
</html> 