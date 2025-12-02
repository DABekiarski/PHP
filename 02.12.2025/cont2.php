<?php
//A-Z, a-z, _
//0-9
//PHP is case-sensitive
// $age != $AGE

$Name = "Sam Smith"; //String
$_age = 25; //Integer
$salary = 3456.55; //Float
$char = '%'; //Char
$isEmployed = "true"; // Boolean

//Constants
const MAX_WORKING_HOURS = 40;
define("MAX_HOURS", "35");

echo "Name of employee: $Name";
echo "<br>";
echo "Age of employee: $_age";
echo "<br>";
echo "Salary: $salary";
echo "<br>";
echo "Char: $char";
echo "<br>";
echo "Working: $isEmployed";
echo "<br>";
echo "<br>";
echo "Working hours: ". MAX_WORKING_HOURS;
echo "<br>";

var_dump($isEmployed);//Info about
//the name of the variable, content,
//type and size in the computer memory

?>