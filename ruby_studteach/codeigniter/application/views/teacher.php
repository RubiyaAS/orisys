<html>
<head>
<title></title>
<style>
 body{margin:2px;border:1px solid;
border-collapse:collapse;width:600px;height:900px;
padding:20px;text-align:center;
}
</style>
<body>
<form action="<?php echo base_url()?>Main/teachinsert" method="post">
<h1>TEACHER FORM</h1>
Name  :<input type="text" name="name"><br><br>
Address  :<textarea  name="address">
</textarea><br><br>
District :
<select name="district">
<option value="kollam">Kollam</option>
<option value="tvm">TVM</option>
<option value="pathanmthila">Pathanamthitta</option>
<option value="kozhikod">Kozhikodu</option>
<option value="ernakulam">Eranakulam</option>
</select><br>
Pincode :<input type="text" name="pincode"><br><br>
Phonenumber :<input type="text" name="phonenumber"><br><br>
Gender:
<input type="radio" name="gender" value="male" id="male">
<label for="male">male</label>
<input type="radio" name="gender" value="female" id="female">
<label for="female">female</label><br><br>
subject:<select name="subject">
<option value="malayalam">malayalm</option>
<option value="hindi">hindi</option>
<option value="english">english</option>
<option value="maths">maths</option>
<option value="cs">cs</option>
</select><br>
Email :<input type="email" name="email"><br><br>
password :<input type="password" name="password"><br><br>
<input type="submit">

</form>
</body>
</html>