<?php
$Salary = array(1500,700,3000,5000);

//Sorting - ascending
//sort($Salary);

// Sorting - descending
rsort($Salary);

print_r($Salary);

//Sum of elements of an array
$SumofArray = array_sum($Salary);

echo "<br>";
echo $SumofArray;
?>