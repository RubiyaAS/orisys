<html>
<head>
<title></title>
</head>
<style>
table,th,td{border-collapse:collapse;border:1px solid #ff0000;padding:15px;}
</style>
<body>
<table>
<thead>
<tr>
<th>userid</th>
<th>username</th>
<th>userpassword</th>
<th>userstatus</th>
</tr>
</thead>

<?php
/*$user_name='anu';
$user_password='a19';
$user_status=7;*/
$mysql=new mysqli("localhost","root","","ddu");
//$query=$mysql->query("insert into ddjk(user_name,user_password,user_status)values('$user_name','$user_password',$user_status)");*/
$query=$mysql->query("select * from ddjk");
/*while($row=$query->fetch_assoc())
{
	echo "<br>";
print_r($row);
}*/
while($row=$query->fetch_assoc())
{	
echo "<tr><td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>".$row['user_password']."</td><td>".$row['user_status']."</td></tr>";
}
?>

</table>
</body>
</html>