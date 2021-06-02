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



<html lang="en">
<head>
  <title>log-in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--<link href="favicon.ico" rel="shortcut icon"/>-->

<style>
  
body{
	background-color:#e9ebee;
	position:absolute;
	overflow:auto;
    width:100%;
    -webkit-font-smoothing: antialiased;
  font: normal 16px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;

}
#logo-img{
	padding-top:0px;
	height:27px;
}

#top-menu-bg{
	background-color:#fff;
	height:auto;
	width:100%;
	position:fixed;
	z-index:11;
	
}

#seabtn{
	background-color:DodgerBlue;
	margin-left:10px;
	
}

#div1{
	margin-top:70px;
}

.form-inline{
	padding-top:10px;
}


h2{width:auto;color:#12a70c;margin:5px 5px 5px 0px;}
div{display:block;}


#f1 {
  border: 2px solid black;
  padding:20px 10px 20px 10px;
  margin:50px 50px 50px 50px;
  width:50%;
  border-radius: 15px;
  box-shadow:0 1px 0 #cfcfcf;
  background:transparent!important;
    font-size: 18px!important;

}

input[type=text], input[type=password] {
  width: 75%;
  padding: 5px 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
  border-radius: 10px;
}

input[type=submit]{
  background-color:lightgreen;
  color: black;
  font-weight:bold;
  font-size:16px;
  padding: 5px 5px;
  margin: 8px 0;
  
}

input[type=submit]:hover {
  opacity: 0.8;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}




    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color:#e9ebee;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #fff;
      color: #000;
      padding: 15px;
	  width:auto;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    
	}
	
	@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
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
		<form method="post" id="f1">
		<table>
			
			<tr><td>Name:</td> <td><input type="text" name="txt1" required/></td></tr>
			<tr><td>Gender:</td> <td><select name="txt2"><option>Male</option>
											<option>Female</option>
			</selectt></td></tr>
			<tr><td>DateOfBirth:</td> <td><input type="date" name="txt3" required/></td></tr>
			<tr><td>Email:</td> <td><input type="text" name="txt4" required/></td></tr>
			<tr><td>Mobile:</td> <td><input type="text" name="txt5" required/></td></tr>
			<tr><td>Address:</td> <td><input type="text" name="txt6" required/></td></tr>
			<tr><td>password:</td> <td><input type="password" name="txt7" required/></td></tr>
			<tr><td>area:</td> <td><input type="text" name="txt8" required/></td></tr>
			<tr><td>blodgroup:</td> <td><input type="text" name="txt9" required/></td></tr>
			<tr><td><input type="submit"/></td></tr>
			</table>
</form>
		
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>


</div>
   </div>
</body>
</html>
