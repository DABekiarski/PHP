<?php

$PINcode = 1234;
$Input = $_POST["PIN"];

while(1){//Infinite loop
		//Condtion is always TRUE = 1
			//FALSE = 0
	if($Input==$PINcode){
		echo "Access granted.";
		break;
	}else{
		echo "Try again.";
	}
}

?>