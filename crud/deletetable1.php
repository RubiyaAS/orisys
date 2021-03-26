<!DOCTYPE html>
<html>
<title>table</title>

<style>
 table,th,td{
	        border:2px solid red;
			padding:10px;
			border-collapse:collapse;
            }
</style>
</head>

<body>
<table>
<thead>
   <tr>
       <th>id</th>
       <th>name</th>
	   <th>lastname</th>
	   <th>emailid</th>
    </tr>
</thead>
<tbody>
<?php
$link=mysqli_connect("localhost","root","","demo");
if($link===false)
{
die("Error:could not connect".mysqli_connect_error());
}
$sql="DELETE FROM tab WHERE id=3";
if( mysqli_query($link, $sql)){
	echo " records were updated successfully";
	$query="select * from tab";
	$result=mysqli_query($link, $query);
	while($row=mysqli_fetch_assoc($result))
{
echo  "<tr>
	       <td>".$row['id']."</td>
		   <td>".$row['name']."</td>
		   <td>".$row['lastname']."</td>
		   <td>".$row['emailid']."</td>";
		   
		       echo "<td>
	<a href='delete.php?id=".$row['user_id']."'>delete</a>
	<a href='update.php?id=".$row['user_id']."'>update</a>
	</td>

	  </tr>";
}
}
else
{
echo "error$sql".mysqli_error($link);
}
mysqli_close($link);
?>
</tbody>
</table>
</body>
</html>