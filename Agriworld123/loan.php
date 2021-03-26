<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

session_start();
$id=$_SESSION['loginid'];
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<a href="table_loan_view.php" class="btn btn-dark">Previous</a>
	<div class="main-w3layouts wrapper">
		<h1 class="text-dark"> <b>Loan Application Form</b></h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				
					<?php
error_reporting(0); 
?> 
<?php
  $msg = ""; 
  
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
  
  $loanname=$_POST['loanname'];
  $name=$_POST['name'];
  $place=$_POST['place'];
  $cultivatedarea=$_POST['cultivatedarea'];
  $loanamount=$_POST['loanamount'];
  
 
  
    $uploadfile = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "images/".$filename; 
          
    $db = mysqli_connect("localhost", "root", "", "agriworld"); 
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO tb_loan(loanname,name,place,cultivatedarea,loanamount,uploadfile,loginid) values('$loanname','$name','$place','$cultivatedarea','$loanamount','$uploadfile','$id')";
  
        // Execute query 
        mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $uploadfile))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
  $result = mysqli_query($db, "SELECT * FROM tb_loan"); 
?> 
  
<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
<link rel="stylesheet" type= "text/css" href ="style.css"/> 
<div id="content"> 
  
  <form method="POST" action="" enctype="multipart/form-data"> 
  <input type="text" name="loanname" placeholder="loan name">
  <input type="text" name="name" placeholder="name">
   <input type="text" name="place" placeholder="place">
    <input type="text" name="cultivatedarea" placeholder="cultivated area">
	 <input type="text" name="loanamount" placeholder="loan amount">
  
      <input type="file" name="uploadfile" id="uploadfile"> 
        
      <div>
          <input type="submit" name="upload" value="submit"> 
		
        </div> 
  </form> 
</div> 
</body> 
</html> 
					
					
					
					
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							
						</label>
						<div class="clear"> </div>
					</div>
					
				</form>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p> <a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>