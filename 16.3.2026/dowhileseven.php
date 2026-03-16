<?php
$j = 0;

do{
	if($j % 10 == 7){
		echo $j;
		echo "<br>";
	}
	$j++;
} while($j <= $_POST["sevennumber"]);

?>