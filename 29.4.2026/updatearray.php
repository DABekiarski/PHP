<?php
//Standard array
$fruits = array("Orange", "Melon", "Strawberry");
$fruits [] = "Pear";//Adding a new element in the array


echo $fruits[3];
echo "<br>";

//Associative array

$cars = [

"brand" => "Ferrari",
"year" => 1994

];

$cars += [

"color" => "red",
"seats" => 2

];

var_dump($cars);

?>