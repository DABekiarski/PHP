<?php

$x = 45;

$y = 7;

function addXY(){
	//Body of the function
	global $x, $y;//Use x and y
	echo $x += $y;//Instead of x = x + y
	echo "<br>";//New line
}

function subXY(){
	global $x, $y;
	echo $x -= $y;//Instead of x = x - y
	echo "<br>";//New line
}	

function mulXY(){
	//Body of the function
	global $x, $y;//Use x and y
	echo $x *= $y;//Instead of x = x * y
	echo "<br>";//New line
}

function divXY(){
	global $x, $y;
	echo $x /= $y;//Instead of x = x / y
	echo "<br>";//New line
}	

addXY();//Calling the function
subXY();//Calling the function
divXY();//Calling the function
mulXY();//Calling the function

?>