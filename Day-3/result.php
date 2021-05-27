<?php 
$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];

echo "<h2>All the marks is shown in below table</h2>";
echo "<table>";
echo "<tr><td>Subject1</td><td>$a</td></tr>";
echo "<tr><td>Subject2</td><td>$b</td></tr>";
echo "<tr><td>Subject3</td><td>$c</td></tr>";
echo "<tr><td>Subject4</td><td>$d</td></tr>";
echo "<tr><td>Subject5</td><td>$e</td></tr>";
echo "</table><br/>";

$f = $a+$b+$c+$d+$e;

echo "<h3>Total marks is = $f</h3><br>"
 
$g = $f % 5;
echo "<h3>Persantage is = $g %</h3><br>"

?>