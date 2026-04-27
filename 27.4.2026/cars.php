<?php
//Standard array
//Associative array

//Multidimensional array,3D
$cars = array(
	array ("Mercedes-Benz", 100, 15),
	array ("Audi", 200, 20),
	array("Porsche", 50, 5)
);

echo $cars[0][0].": In stock: ".$cars[0][1]." Sold: ".$cars[0][2];
echo "<br>";
echo $cars[1][0].": In stock: ".$cars[1][1]." Sold: ".$cars[1][2];
echo "<br>";
echo $cars[2][0].": In stock: ".$cars[2][1]." Sold: ".$cars[2][2];

?>