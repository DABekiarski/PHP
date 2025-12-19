<?php
$x = 67;
$y = 55;

function SmallerGreater(){
	global $x, $y;
	echo var_dump($x <= $y);
	echo "<br>";
}

function GreaterSmaller(){
	global $x, $y;
	echo var_dump($x >= $y);
	echo "<br>";
}

function Equal(){
	global $x, $y;
	echo var_dump($x == $y);
	echo "<br>";
}

function NotEqual(){
	global $x, $y;
	echo var_dump($x != $y);
	echo "<br>";
}

SmallerGreater();
GreaterSmaller();
Equal();
NotEqual();
?>