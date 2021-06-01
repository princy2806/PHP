<?php

$host="localhost";
$username="root";
$passwd = "";
$dbname= "db_internship";

$connection = mysqli_connect($host, $username, $passwd, $dbname);

if($_POST)
{
	$name = $_POST['txt1'];
	$gender = $_POST['txt2'];
	$dob = $_POST['txt3'];
	$email = $_POST['txt4'];
	$mobile = $_POST['txt5'];
	$address = $_POST['txt6'];
	$password = $_POST['txt7'];
	$area = $_POST['txt8'];
	$bgroup = $_POST['txt9'];
}

$q = mysqli_query($connection,
	"insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,stt_address,st_password,st_area,st_blodgroup)
	values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$password}','{$area}','{$bgroup}')")
or die("Error".mysqli_error($connection));

if($q){
	echo "<script>alert('Record Added');</script>";
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : StampALike  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120528

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<center><h2>Student Registration Form</h2></center>
</div>
</div>
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<h3>Here student can enter their detail for Admission</h3>
		<form method="post">
		<table border="4px">
			
			<tr><td>Name:</td> <td><input type="text" name="txt1"/></td></tr>
			<tr><td>Gender:</td> <td><select name="txt2"><option>Male</option>
											<option>Female</option>
			</selectt></td></tr>
			<tr><td>DateOfBirth:</td> <td><input type="date" name="txt3"/></td></tr>
			<tr><td>Email:</td> <td><input type="text" name="txt4"/></td></tr>
			<tr><td>Mobile:</td> <td><input type="int" name="txt5"/></td></tr>
			<tr><td>Address:</td> <td><input type="text" name="txt6"/></td></tr>
			<tr><td>password:</td> <td><input type="password" name="txt7"/></td></tr>
			<tr><td>area:</td> <td><input type="text" name="txt8"/></td></tr>
			<tr><td>blodgroup:</td> <td><input type="text" name="txt9"/></td></tr>
			<tr><td><input type="submit"/></td></tr>
			</table>
</form>
		
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>1 Jun 2021 Design by <a href="https://github.com/princy2806" target="_blank">Princy</a>. </p>
</div>
<!-- end #footer -->
</body>
</html>
