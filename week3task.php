<?php 

include "week3task_dbconnect.php";

echo "<br>";

function multiply($num1, $num2, $num3 = 2){

	$result = $num1 * $num2 * $num3;

	return $result;
}

echo multiply(2,3);



?>