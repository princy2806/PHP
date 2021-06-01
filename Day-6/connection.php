<?php 
$host="localhost";
$username="root";
$passwd = "";
$dbname= "db_internship";
//connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);



if($q){
	
	echo "<script>alert('Record Added');</script>";
}
?>