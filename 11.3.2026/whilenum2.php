<?php
$n = 0;
$sum = 0;

while($n <= $_POST["number"]){
	$sum = $sum + $n;
	$n++;
}

echo "The sum is ".$sum;
?>