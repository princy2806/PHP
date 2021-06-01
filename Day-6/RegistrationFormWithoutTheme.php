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

<html>
	<body>
		<h2>Student Registration Form</h2>
		<form method="post">
			<table border="4px">
			
			<tr><td>Name:</td> <td><input type="text" name="txt1"/></td></tr>
			<tr><td>Gender:</td> <td><select name="txt2">
									<option>Male</option>
									<option>Female</option>
									</select>
							</td>
			</tr>
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
	</body>
</html>

