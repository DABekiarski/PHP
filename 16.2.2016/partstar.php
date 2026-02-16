<?php

$rows = 15;

//Outer cycle for new lines
for($i=$rows; $i>=1;--$i){
	
	//Inner cycle for the stars
	for($j=1; $j<=$i; $j++){
		echo "* ";
	}
	echo "<br>";
}

?>