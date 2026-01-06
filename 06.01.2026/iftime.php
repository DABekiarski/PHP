<?php
$time = date("H");//Instead of 13
$day = 2;

//Condition
if($time < 20 && $day == 2){//Условие
	//Commands
	echo "Good day!";
	echo "<br>";
}

echo "if statement not true.";

?>