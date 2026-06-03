<?php
//Text - operations
// PHP - data type "string"

$string = " I am a student in NTBG. ";

// Operations
echo strlen($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strtolower($string);
echo "<br>";
echo str_word_count($string);
echo "<br>";
$trimString = trim($string);
echo $trimString;
?>