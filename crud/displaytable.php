<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
	die ("error:could not occur".mysqli_connect_error());
}
?>
<html>
<head>
<title></title>
<style>
body{
	text-align:center;
}
table{
	width:300px;
	height:200px;
}
table,th,td{
	border:1px solid;
	border-collapse:collapse;
}
</style>
<body>
<table>
<tr>
<th>name</th>
<th>address</th>
<th>email</th>
</tr>

<?php
$query="select * from tab";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)>0)

		{
	while($row =mysqli_fetch_assoc($result)) 
	{
        echo "<tr>
		<td>".$row['name']."</td>
		<td>".$row['lastname']."</td>
		<td>".$row['emailid']."</td>
</tr>";		
    }
	}
	else
	{
	echo "no result";
	}
	mysqli_close($link);
?>
</head>
</table>
</body>
</html>


