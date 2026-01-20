<?php

$marks = 89;

$result = match(true){
	$marks < 50 => 'Fail',
	$marks < 70 => 'Average',
	$marks < 90 => 'Excellent',
};

echo $result;

?>