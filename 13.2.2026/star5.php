<?php

$rows = 10;

//Outer cycle for the new lines
for($i = 1; $i <= $rows; $i++){

	//Inner cycle for the stars
	for($j = 1; $j <= $i; $j++){
			echo "* ";	
	}
	
	echo "<br>";
}

?>