<html>
<title>
</title>
<head>
<style>
.error{color:#ff0000;}
</style>
</head>
<body>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  function test_input($data)
  {
	  $data=trim
  ?>
