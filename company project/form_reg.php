<!DOCTYPE html>

<html>
<head>

<meta charset=utf-8>
      <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
input{padding:10px;margin:20px;}
select {padding:10px;margin:20px;}
.mar 
{
	margin-left:400px;
}
</style>
</head>
<body>
<nav class="navbar navbar-light bg-warning">
 </i> <a class="navbar-brand text-white" href="login_form.php">Register</a>
</nav>
	
	<div class="container">
	<div class="row">
	<div class="mar">

<form action="reg_action.php" method="POST">
<h1> FORM PAGE</h1>
	<label for="iname">Individual</label><input type="radio" id="iname" name="iname"> <label for="oname">Organization</label><input type="radio" id="oname" name="oname"><br>
	Name:&nbsp<input type="text" name="name" placeholder="name" class="px-5"></br>
	Date:&nbsp&nbsp<input type="date" name="date" placeholder="date" class="px-5"></br>
	Email:&nbsp&nbsp<input type="email" name="email" placeholder="email" class="px-5"></br>
	Phone:<input type="text" name="phonenumber" placeholder="phonenumber" class="px-5"></br>
	state:&nbsp&nbsp<select name="state" id="state" class="px-5">
	<option value="kerala">kerala</option>
	<option value="Thamilnadu">Thamilnadu</option>
	<option value="karnadaka">karnadaka</option>
	<option value="Andrapradesh">Andrapradesh</option>
	</select><br>
	
	District:&nbsp<select name="district" id="district" class="px-5">
	<option value="kollam">kollam</option>
	<option value="TVM">TVM</option>
	<option value="Madurai">Madurai</option>
	<option value="Misoor">Misoor</option>
	<option value="khammam">khammam</option>
	</select><br>
	
	Block:&nbsp&nbsp<select name="block" id="block" class="px-5">
	<option value="chadayamangalam">chadayamangalam</option>
	<option value="Vattapara">Vattapara</option>
	<option value="Melur">Melur</option>
	<option value="Hunsur">Hunsur</option>
	<option value="Palwancha">Palwancha</option>
	</select><br>
	
	Village:&nbsp<select name="village" id="village" class="px-5">
	<option value="Nilamel">Nilamel</option>
	<option value="Pulpatta">Pulpatta</option>
	<option value="Amoor">Amoor</option>
	<option value="Abburu">Abburu</option>
	<option value="Karegattu">Karegattu</option>
	</select><br>
  Password:<input type="password" name="password" placeholder="password" class="px-5"></br>
	<button type="submit"  class=" btn bg-danger text-white">Register</button><br>
	<a href="login_form.php">back to home</a>
	</div>
	</div>

             
</form>
</body>
</html>
