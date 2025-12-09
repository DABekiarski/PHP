
<?php
$balance = 10000.55;
const NAME = "Alex Hitchers";
const ACCOUNTNUMBER = 21345;

function deposit($dbalance){
	global $balance;//Use balance
	$balance = $balance + $dbalance;
	echo "Client: ".NAME;
	echo "<br>";
	echo "Account Number: ".ACCOUNTNUMBER;
	echo "<br>";
	echo "Balance after deposit: $balance";
	echo "<br>";
}

function withdraw($wbalance){
	//Function body
	global $balance;
	$balance = $balance - $wbalance;
	echo "Client: ".NAME;
	echo "<br>";
	echo "Account Number: ".ACCOUNTNUMBER;
	echo "<br>";
	echo "Balance after withdraw: $balance";
}

deposit(65.45);//Calling the function
withdraw(125.64);//Calling the function
?>