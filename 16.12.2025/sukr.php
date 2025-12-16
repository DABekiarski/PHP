<?php
$x = 43;
$y = 6;

function addXY(){
	global $x, $y;//Use them in function
	echo $x+=$y;//x = x + y
	echo "<br>";// New line
}
function subXY(){
	global $x, $y;//Use them in function
	echo $x-=$y;//x = x - y
	echo "<br>";// New line
}
function mulXY(){
	global $x, $y;//Use them in function
	echo $x*=$y;//x = x * y
	echo "<br>";// New line
}
function divXY(){
	global $x, $y;//Use them in function
	echo $x/=$y;//x = x / y
	echo "<br>";// New line
}

addXY();// Calling the function
subXY();// Calling the function
divXY();// Calling the function
mulXY();// Calling the function

?>