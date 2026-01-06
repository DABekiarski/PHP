<?php

$time = date("H");//14 h
$day = 2;

//Condition
if($time < 20 || $day == 3){//Условие
	//Commands
	echo "Good day, Tuesday!";
}

?>