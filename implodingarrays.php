<?php

$array	=	array("Eggs","Milk","Bread","Butter");
$glue	=	",";

// Short way
echo implode($glue, $array);

echo "<br>";

// Long way
$c = count($array);
for($i = 0; $i < $c; $i++){
	echo $array[$i];
	if($i != $c - 1)
		echo $glue;
}