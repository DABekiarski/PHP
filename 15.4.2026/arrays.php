<?php

//Array
$laptops = array("HP","Dell","Acer");
//Associative array
$pc_charactestics = [
	"model" => "Dell 1000",
	"year" => 2005,
	"CPU" => 3.0
];

//Indexing - PC counts from 0
echo $laptops[1];

//Associative array 
echo "<br>";
echo $pc_charactestics["year"];
?>