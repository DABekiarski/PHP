<?php

$age = 20;
$haveLicense = false;

//Nested ifs
if($age >= 18){//Условие 1,condition 
	if($haveLicense == true){//Условие 2 
		echo "Can drive a car.";	
	}
} else {//FALSE
	echo "Cannot drive a car.";
}
echo "<br>";

$income = 15000;
$tax = 0;

if($income < 10000){
	$tax = ($income) * 10/100;
	echo "Income: $income";
	echo "<br>";
	echo "Tax: $tax";
} else {
	$tax = ($income) * 15/100;
	echo "Income: $income";
	echo "<br>";
	echo "Tax: $tax";
}

?>