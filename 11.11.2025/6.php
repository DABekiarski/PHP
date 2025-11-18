<?php
//Отварящ таг

//Масив cars,състоящ се от 3 елемента

$cars = array("BMW","Mercedes","Volvo","Opel");

//Масив colors,състоящ се от 2 елемента
$colors = array("Red","Blue","Green");

//Масив laptops,състоящ се от 3 елемента
$laptops = array("HP","Dell","Acer");

//Цикличен алгоритъм за ел. на масива
foreach($cars as $x){
	//Тяло на цикъла
	if($x=="Volvo")break;
	echo "$x <br>";//Многократно се изпълнява
}

echo "<br>";

foreach($colors as $y){
	if($y=="Blue")break;
	echo "$y <br>";
}

echo "<br>";

//Цикъл за laptops

?>