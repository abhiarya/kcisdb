<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","kcis_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO schools (ID, SCHOOL_NAME, ADDRESS, PHONE, LEVEL)
VALUES ('50', 'Virginia Tech','Virginia', '1234556','College')");

mysqli_close($con);
?>
</body>
</html>