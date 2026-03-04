
<?php

$num = 12345;
$rev = 0; 

while($num != 0){
	$remainder = $num % 10;
	$rev = $rev * 10 + $remainder; 
	$num = intdiv($num, 10);
}

echo "Revisited number: ".$rev;

?>