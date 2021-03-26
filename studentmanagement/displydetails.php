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
<th>id</th>
<th>studentname</th>
<th>studentrollnumber</th>
<th>studentaddress</th>
<th>studentemail</th>
<th>delete/update</th>
</tr>

<?php
$query="select * from manage";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)>0)

		{
	while($row =mysqli_fetch_assoc($result)) 
	{
        echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['studentname']."</td>";
		echo "<td>".$row['studentrollnumber']."</td>";
		echo "<td>".$row['studentaddress']."</td>";
		echo "<td>".$row['studentemail']."</td>";
		
		echo "<td>
	<a href=studentdelete.php?id=".$row['id'].">delete</a>/
	<a href=updatestudent.php?id=".$row['id'].">update</a>
	</td>

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


