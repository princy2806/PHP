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
	$mobile = $_POST['txt3'];
}


$q = mysqli_query($connection,
	"insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')")
or die("Error".mysqli_error($connection));
if($q){
	echo "<script>alert('Record Added');</script>";
}


?>
<html>

<body>
<form method="post">
	Name: <input type="text" name="txt1"/>
	Gender:<select name="txt2">
		<option>Male</option>
		<option>Female</option>
	</select>
	Mobile: <input type="number" name="txt3"/>
	<input type="submit" value="submit"/>
</form>
</body>
</html>

