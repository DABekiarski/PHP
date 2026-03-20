<?php

$basic = 1;
$fabric = 1;
//Outer loop
while($basic <= 12){
	$fabric = 1;
	//Inner loop
	while($fabric <= 12){
		echo $basic . " x " . $fabric. " = " .($basic * $fabric); 
		echo "<br>";
		$fabric++;
	}
	$basic++;
}

?>