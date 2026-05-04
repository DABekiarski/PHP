<?php

$fruits = array("Mango","Pear","Pineapple");

//Adding element
array_push($fruits,"Strawberry");//Last
array_unshift($fruits,"Melon");//First element

//Delete elements

array_pop($fruits);//Delete the last element
array_shift($fruits);//Delete the first element

var_dump($fruits);

?>