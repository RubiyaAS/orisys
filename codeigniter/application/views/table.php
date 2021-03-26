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
<form action="<?php echo base_url()?>Main/updatedetails" method="post">
<?php
       if(isset($user_data))
       {
           foreach($user_data->result() as $row1)
           {
    ?>
        <table>
            <tr>
            <td>Name :</td>
            <td><input type="text" name="name" value="<?php echo $row1->name; ?>"></td>
            </tr>
            <tr>
            <td>Address:</td>
            <td><textarea name="address" ><?php echo $row1->address; ?></textarea></td>
            </tr>
            <tr>
            <td>Gender :</td>
            <td><input type="radio" name="gender" value="<?php echo $row1->gender; ?>"></td>
            </tr>
            <td>Age :</td>
            <td><input type="text" name="age" value="<?php echo $row1->age; ?>"></td>
            </tr>
            <td>Email :</td>
            <td><input type="email" name="email" value="<?php echo $row1->email; ?>"></td>
            </tr>
            <tr>
            <td><input type="hidden" name="id" value=<?php echo $row1->id;?>></td>
            </tr>
            <tr>
            <td rowspan="5"><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    <?php           
           }
       }
    else
       {
    ?>   
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
 
    <?php
    if($row->status==1)
    {?>
    <td>Aproved</td>
    <td><a href="<?php echo base_url()?>Main/rejecteddetails/<?php echo $row->id;?>">reject</a></td>
    <?php
    }
    elseif($row->status==2)
    {
    ?>
    <td>rejected</td>
    <td><a href="<?php echo base_url()?>Main/aprovedetails/<?php echo $row->id;?>">approve</a></td>
    <?php
    }
    else
    {
    ?>
    <td><a href="<?php echo base_url()?>Main/aprovedetails/<?php echo $row->id;?>">approve</a></td>
    <td><a href="<?php echo base_url()?>Main/rejecteddetails/<?php echo $row->id;?>">reject</a></td>
    <?php
}?> 
<td><a href="<?php echo base_url()?>Main/deletedetails/<?php echo $row->id;?>">delete</a></td>
    <td><a href="<?php echo base_url()?>Main/updatedetails/<?php echo $row->id;?>">update</a></td>
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