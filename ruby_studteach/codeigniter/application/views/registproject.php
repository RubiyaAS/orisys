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
<form action="<?php echo base_url()?>Main/proinsert" method="post">
<h1>STUDENT FORM</h1>
Name  :<input type="text" name="name"><br><br>
Lastname  :<input type="text" name="lname"><br><br>
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
DOB :<input type="date" name="dob"><br><br>
Gender:
<input type="radio" name="gender" value="male" id="male">
<label for="male">male</label>
<input type="radio" name="gender" value="female" id="female">
<label for="female">female</label><br><br>
Education :<select name="education">
<option value="btech">Btech</option>
<option value="mca">MCA</option>
<option value="Dfam">Dfam</option>
<option value="ITA">ITA</option>
<option value="Msc">Msc</option>
</select><br>
Email :<input type="email" name="email"><br><br>
password :<input type="password" name="password"><br><br>
<input type="submit">

</form>
</body>
</html>