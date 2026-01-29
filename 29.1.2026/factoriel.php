<?php

$n = 8;
$factoriel = 1.0;

if($n < 0){
	echo "Error! n must be positive!";	
} else {
	for($i = 1; $i <= $n; ++$i){
	$factoriel = $factoriel * $i;
	//1.2.3.4.5=120
	}
}
echo "8! = " . $factoriel;

?>