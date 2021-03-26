
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
<form action="<?php echo base_url()?>Main/updatedetailss" method="post">
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
    <td><input type="text" name="lname" value="<?php echo $row1->lname;?>"></td>
    </tr>
    <tr>
    <td><input type="text" name="address" value="<?php echo $row1->address;?>"></td>
    </tr>
    <tr>
    <td><input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></td>
    </tr>
    <tr>
    <td><input type="text" name="phonenumber" value="<?php echo $row1->phonenumber;?>"></td>
    </tr>
    <tr>
    <td><input type="date" name="dob" value="<?php echo $row1->dob;?>"></td>
    </tr>
    <tr>
    <td><input type="text" name="gender" id="male" value="<?php echo $row1->gender;?>"></td>
    </tr>
    <tr>
    <td><input type="mail" name="mail" value="<?php echo $row1->mail;?>"></td>
    </tr>
    <tr>
    <td><input type="text" name="status" value="<?php echo $row1->status;?>"></td>
    </tr>
    <tr>
    <td><input type="hidden" name="loginid" value="<?php echo$row1->loginid;?>"></td>
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
        <th>lname</th>
        <th>address</th>
        <th>district</th>
        <th>pincode</th>
        <th>phonenumber</th>
        <th>dob</th>
        <th>gender</th>
        <th>education</th>
        <th>email</th>
        <th colspan="4">Actions</th>
    
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
        <td><?php echo $row->lname;?></td>
        <td><?php echo $row->address;?></td>
        <td><?php echo $row->district;?></td>
        <td><?php echo $row->pincode;?></td>
        <td><?php echo $row->phonenumber;?></td>
        <td><?php echo $row->dob;?></td>
        <td><?php echo $row->gender;?></td>
        <td><?php echo $row->education;?></td>
        <td><?php echo $row->email;?></td>
    
    <?php
    if($row->status==1)
    {?>
    <td>Aproved</td>
    <td><a href="<?php echo base_url()?>Main/rejecteddetailss/<?php echo $row->loginid;?>">reject</a></td>
    <?php
    }
    elseif($row->status==2)
    {
    ?>
    <td>rejected</td>
    <td><a href="<?php echo base_url()?>Main/aprovedetailss/<?php echo $row->loginid;?>">approve</a></td>
    <?php
    }
    else
    {
    ?>
    <td><a href="<?php echo base_url()?>Main/aprovedetailss/<?php echo $row->loginid;?>">approve</a></td>
    <td><a href="<?php echo base_url()?>Main/rejecteddetailss/<?php echo $row->loginid;?>">reject</a></td>
    <?php
}?> 


    
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