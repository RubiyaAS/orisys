<html>
<head>
<title></title> 
<body>
<h1>REGISTRATION</h1>
    <form action="<?php echo base_url()?>Main/regist" method="post">
        Name<input type="text"  name="name" placeholder="name"><br><br>
        Address<textarea type="address" name="address" placeholder="address">
        </textarea><br><br>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="male">female</label><br><br>
        Age<input type="text"name="age" placeholder="age"><br><br>
        Email<input type="email" name="email" placeholder="email"><br><br>
        Password<input type="Password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="register">
</head>
</body>
</html>