<?php
//A-Z, a-z, _,0-9
$Nameofemployer = "Sam Smith";//String
//VALID
$_ageofemployer = 25;//VALID, integer
$salary = 5000.50;//NOT VALID

//Constants
const MAX_WORKING_HOURS = 40;
define("MAX_HOURS", "35");

echo "Name of employer: $Nameofemployer";
echo "<br>";
echo "Age of employer: ". $_ageofemployer;
echo "<br>";
echo "Working hours per week:". MAX_WORKING_HOURS;

?>