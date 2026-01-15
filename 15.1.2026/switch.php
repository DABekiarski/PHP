<?php

$day = 12;

switch($day){// day is controlling the operator
	
	case 1:
		echo "Today is Monday.";
		break;//Stop executing switch
	case 2:
		echo "Today is Tuesday.";
		break;
	default:// Number different from 1-7
		echo "Wrong day number.";
		break;
}

?>