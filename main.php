<?php

	$username = $_GET['fname'];
	$password = $_GET['lname'];

	if ($username != "admin" || $password != "123") {
		
		header("Location: index.php?flag=wrong");
		
	} 
?>

<style type="text/css">
p {
	color: #FFF;
}
body p {
	text-align: left;
}
form {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	text-align: left;
	color: #FFF;
}
</style>

<body bgcolor="#49494a">


<img src="logo.png" alt="KCIS" align="absmiddle"/>


<form>
  <p>
  <input type="radio" name="fname">
  School
  </p>
  <p><br>
    
    <input type="radio" name="lname">
    Student
  </p>
  <p><br>
    
    <input type="radio" name="lname">
    Sponsor
  </p>
  <p><br>
    
    <input type="radio" name="lname">
    Transaction
  </p>
  <p><br>
    
    <input type="radio" name="lname">
    Report
  </p>
  <p><br>
    <input type="submit" value="Go!">
  </p>
  
</form>
</body>




