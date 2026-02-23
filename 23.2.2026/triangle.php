<?php
$n = 50;

for($i = 0; $i <= $n; $i++){
	for($s = $n; $s > $i; $s--)
		echo " ";
		for($j = 0; $j<$i; $j++)
			echo "* ";
			echo "<br>";
}
//Reverse triangle
for($i=1; $i<$n; $i++){
	for($s = 0; $s < $i; $s++)
		echo " ";
		for($j = $n; $j > $i; $j--)
			echo "* ";
			echo "<br>";	
}


?>