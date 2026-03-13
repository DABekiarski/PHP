<?php
$k = 0;
do{
	if($k % 10 == 7){
		echo $k;
		echo "<br>";
	}
	$k++;
}while($k <= $_GET["sevennumber"]);
?>