<?php

$weeks = 3;
$days_of_week = 7;

//Outer cycle for the weeks
for($i = 1; $i<=$weeks; ++$i){
	echo "Week ".$i;
	echo "<br>";
	//Inner cycle for days
	for($j = 1; $j <=$days_of_week;$j++){
		if($j % 2 != 0){
			continue;
		}
		echo "Day ".$j;
		echo "<br>";
	}
	
}

?>