<?php
echo "gg";
session_start();
$id=$_SESSION['loginid'];
$mysql=new mysqli("localhost","root","","agriworld");

$query=$mysql->query("select * from tb_farmer  where loginid=$id ");
foreach($query as $value=>$row)
    {
echo  $name=$row['fname'];
	}

?>
<table border=1>
	<tr>
		<td>Name</td>
		<td>Crop</td>
		<td>phno</td>
		<td>quantity in kg</td>
		<td>price for one kg</td>
		<td>Photo</td>
		<td>buy</td>


	</tr>
	<?php

$sql="select * from tb_crop c,tb_farmer s,tb_buy b where s.loginid=c.loginid and b.crop_id not in c.id";
$res=$mysql->query($sql);

foreach($res as $value=>$row)
    {
    	?>
<tr><td><?php echo $row['s.fname'];?></td>
<td><?php echo $row['c.crop_name'];?></td>
<td><?php echo $row['s.phno'];?></td>
<td><?php echo $row['c.quantity'];?></td>
<td><?php echo $row['c.price'];?></td>
<td><?php echo $row['c.Filename'];?></td>
<td><?php echo $row['b.id'];?></td>
</tr>



    	<?php
    }

	?>
	</table>