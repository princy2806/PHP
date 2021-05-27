<html>
	<body>

<!---
GET: Not secure
POST: secure
Acion: You can specify a page name where data will submit.

-->
<h1>Registration Form</h1>
	<form method="post" action="process.php">
	<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="txt1" required/></td>
	</tr>
	 
	 <tr>
		<td>Email:</td>
		<td> <input type="text" name="txt2" required/></td>
	</tr>
	
	<tr>
		<td>Branch:</td>
		<td> <input type="text" name="txt3" required/></td>
	</tr>
	
	<tr>
		<td>Password:</td>
		<td> <input type="password" name="txt4" required/></td>
	</tr>


	
	<tr>
	<td>
	<input type="submit"/></td>
	
	
		<td>
	<input type="reset"/></td>
	</tr>

	</table>
	</form>
	</body>
</html>