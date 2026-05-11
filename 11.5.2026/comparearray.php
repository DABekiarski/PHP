

<?php
//Types of arrays

//Standard array
$cars = array(
	"Volvo",
	"VW",
	"BMW");

//Associative array

$BankAccount = [
	"Number" => 04233425,
	"FirstName" => "Alex",
	"LastName" => "Alexov"
];

//Indexing - standard array
echo $cars[1]; // Second element
echo "<br>";

//Indexing - associative array
echo $BankAccount["FirstName"];

//Update an array

//Adding an element
$cars [] = "Ford";//Last element
array_unshift($cars,"Audi");//First element

//Delete an element
array_pop($cars);//Delete the last element
unset($BankAccount["FirstName"]);//Delete specific element

echo "<br>";
var_dump($cars);
echo "<br>";
var_dump($BankAccount);

//Comparing arrays

$colors1 = array("a"=>"white", "red", "yellow");
$colors2 = array("b"=>"white","yellow");

// Comparing function - values

$result = array_diff($colors1,$colors2);

echo "<br>";
print_r($result);

// Comparing function - values and keys/Indexing

$a = [
	"x" => "x",
	"y" => "y"
];

$b = [
	"x" =>"x",
	"y"=>"y",
	"g"=>"g"
];

$result2 = array_diff_assoc($b,$a);

echo "<br>";
print_r($result2);

//Exercise - create an array $c,
//array_diff_assoc($b,$a,$c)
?>