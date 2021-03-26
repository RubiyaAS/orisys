<html>
<head>
<title></title>
</head>
<style>
table,th,td
{
	border-collapse:collapse;
	border:5px solid #00ff00;
	padding:15px;
	text-align:center;
	background-color:yellow;
	margin-left:200px;
}
</style>
<body>
<a href="insertform.php">INSERT USER</a>
<table>
<thead>
<tr>
     <th>action</th>
	<th>userid</th>
	<th>username</th>
	<th>userpassword</th>
	<th>userstatus</th>
</tr>
</thead
<tbody>

<?php
$mysql = new mysqli("localhost","root","","ddu");
$query=$mysql->query("select * from ddjk");
while($row=$query->fetch_assoc())
{	
echo "<tr>
    <td>
	<a href='delete.php?id=".$row['user_id']."'>delete</a>
	<a href='update.php?id=".$row['user_id']."'>update</a>
	</td>
	<td>".$row['user_id']."</td>
	<td>".$row['user_name']."</td>
	<td>".$row['user_password']."</td>
	<td>".$row['user_status']."</td>
    </tr>";
}
?>

</tbody>
</table>
</body>
</html>
