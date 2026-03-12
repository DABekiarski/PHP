<?php
$n = 0;
$sum = 0;

do {
	$sum = $sum + $n;
	$n++;
} while($n <= $_POST["number"]);

echo "The sum is ".$sum;

?>