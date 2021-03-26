<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>reg</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post" action="<?php echo base_url()?>Main/proinsert1">
   First Name:<input type="text" name="name"><br>
   Last Name:<input type="text" name="name"><br>
    Address:<textarea name="add"></textarea><br>
    District:<select name="district">
</select>

    <input type="submit">
</form>
</body>
</html>