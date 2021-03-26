
<html>
<head>
<title></title>
</head>
<style>
table,td,th{
    border:5px solid;
    border-collapse:collapse;
    padding:20px;
    
}
</style>
<body>
<form action="<?php echo base_url()?>Main/approvedetails" method="post">

<?php
if(isset($user_data))
{
   foreach($user_data->result() as $row1) 
   {
    ?>
<table>
    <tr>
    <td><input type="text" name="name" value="<?php echo $row1->name;?>"></td>
    </tr>
    <tr>
    <td><input type="text" name="address" value="<?php echo $row1->address;?>"></td>
    </tr>
    <tr>
    <td><input type="text" name="gender" id="male" value="<?php echo $row1->gender;?>"></td>
    </tr>
    <tr>
    <td><input type="email" name="emailid" value="<?php echo $row1->email;?>"></td>
    </tr>
    <tr>
    <td><input type="text" name="status" value="<?php echo $row1->status;?>"></td>
    </tr>
    <tr>
    <td><input type="hidden" name="id" value="<?php echo$row1->id;?>"></td>
    <td><input type="submit" name="approve" value="approve"></td>
    </tr>
    </table>
    <?php
    }
    }
    else{
        ?>
<html>
<head>
<title></title>
<table>

    <tr>
    <th>name</th>
    <th>address</th>
    <th>gender</th>
    <th>age</th>
    <th>emaild</th>
    </tr>
<?php
if($n->num_rows()>0)
{
    foreach($n->result() as $row)

{
?>
    <tr>
    <td>
    <?php echo $row->name;?></td>
    <td><?php echo $row->address;?></td>
    <td><?php echo $row->gender;?></td>
    <td><?php echo $row->age;?></td>
    <td><?php echo $row->email;?></td>
    <td><a href="<?php echo base_url()?>Main/approvedetails/<?php echo $row->id;?>">approve</a></td>
    <td><a href="<?php echo base_url()?>Main/rejectdetails/<?php echo $row->id;?>">reject</a></td>


    </tr>
<?php
}
}
else
{
        ?>
        <tr><td>no data found</td></tr>
        <?php
}
}
?>
</table>
</table>
</body>
</html>
