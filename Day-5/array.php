<?php

//metod1
$a[0]=10;
$a[1]=20;
$a[2]=30;
$a[3]="c";
$a[4]="d";

//method2
$a = array(10,20,30,10.5,"c","d","4");

//method3
$a[]=10;
$a[]=20;
$a[]=30;
$a[]="c";
$a[]="d";

//print array value
echo $a[3];
 
//print whole array 
for($i=0;$i<count($a);$i++){
	 echo "<br/>".$a[$i];
}

$sum = array_sum($a);
echo $sum;

//3 inbuilt function function to Debug an Array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";


//Associaive Array
//key-value pair
//method1
$a[0]=10;
$a['c']="computer";
$a['php']="Web development";
$a[10]="Ten";
$a[50]=50.10;


//method2
$a = array(
	0=>10,
	"c" => "computer",
	"php" => "Web development",
	10 => "Ten",
	50 => "50.10"
);
//print value
echo "C for".$a['c'];

foreach($a as $value){
	echo "<br>Value is $value";
}

foreach($a as $key => $value){
	echo "<br/>key is <b>$key</b> and value is <b>$value</b>";
}

?>