<?php
//Declaring variables and constants
//VARIABLES
//A-Z,a-z,_
//0-9

$Name = "Sam Davidson";//String
$_age = 24; //Integer
$salary = 5555.56; //Float
$char = '%'; //Char

//Constants
const MAX_HOURS = 40;
define("MAX","35");

echo "Name: $Name";
echo "<br>";
echo "Age: $_age";
echo "<br>";
echo "Salary: $salary";
echo "<br>";
echo "Char: $char";
echo "<br>";
echo "<br>";
echo "Working hours: ". MAX_HOURS;

?>