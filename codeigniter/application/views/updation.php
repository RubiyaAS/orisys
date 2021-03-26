<html>
<head>
<title></title>
<style>
body{


    background-image:url("../img/7.jpg");
	background-size:cover;

}
.a
{
	
    color:red;
	width:450px;
	height:500px;
	padding:20px;
	text-align:center;
	position:relative;
	left:400px;
    margin-left:100px;
	
}
.menubar
{
	background-color:orange;
	text-align:center;
}
.menubar ul
{
	list-style:none;
	display:inline-flex;
}
.menubar ul li a
{
	color:white;
	text-decoration:none;
}
.submenu
{
	display:none;
}
.menubar ul li
{
	padding:15px;
}
.menubar ul li:hover
{
	background-color:#ff0000;
	border-radius:10px;
}
.menubar ul li:hover .submenu
{
	display:block;
	position:absolute;
	background-color:black;
	margin-top:15px;
	margin-left:-35px;
	border-radius:10px;
	padding:15px;
	
}
.menubar ul li:hover .submenu ul
{
	display:block;
	margin-left:-30px;
}
.menubar ul li:hover .submenu ul li
{
	padding:10px;
	border-bottom:1px solid #ff0000;
}
</style>
</head>
<body>
<form action="<?php echo base_url()?>Main/upddetails" method="post">
<nav class="menubar">
	<ul>
		
		<li><a href="#"> </a>
			<div class="submenu">
				<ul>
					<li><a href="<?php echo base_url()?>Main/pro"></li>
				
				</ul>
			</div>
			
			
            <li><a href="<?php echo base_url()?>Main/homepro">logout</a></li>
		</li>
		<li><a href="#"> Contact us</a></li>
	</ul>
</nav>
<div class="a">
<h1>UPDATION</h1>
<?php
if(isset($userdata))
{
   foreach($userdata->result() as $row1) 
   {
    ?>
    name<input type="text" name="name" value="<?php echo $row1->name;?>"><br><br>
    lname<input type="text" name="lname" value="<?php echo $row1->lname;?>"><br><br>
    address<input type="text" name="address" value="<?php echo $row1->address;?>"><br><br>
    district<input type="text" name="district" value="<?php echo $row1->district;?>">
      <datalist id="district">
      <option value="kottayam">
      <option value="tvm">
      <option value="kollam">
      </datalist><br><br>
    pincode<input type="text" name="pincode" value="<?php echo $row1->pincode;?>"><br><br>
    phonenumber<input type="text" name="phonenumber" value="<?php echo $row1->phonenumber;?>"><br><br>
    gender<input type="text" name="gender" value="<?php echo $row1->gender;?>"><br><br>
    dob<input type="text" name="dob" value="<?php echo $row1->dob;?>"><br><br>
    education<input type="text" name="education" value="<?php echo $row1->education;?>">
    <datalist id="education">
    <option value="mca">
    <option value="mba">
    <option value="btech">
    <option value="eee">
    </datalist><br><br>
    email:<input type="email" name="email" value="<?php echo $row1->email;?>"><br><br>
    <input type="submit" name="update" value="update">
    <?php
   }
}
?>
</div>
</form>
</body>
</html>
