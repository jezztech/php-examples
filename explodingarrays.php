<?php

$str = "This is an awesome array.";

// Short way
$exploded_array = explode(' ', $str);
echo "<pre>" , print_r($exploded_array, true) , "</pre>";

// Long way
$array = array();
$split = " ";
$len   = strlen($str);
$working = "";
for($i = 0; $i < $len; $i++){
	if($str[$i] == $split){
		$array[] = $working;
		$working = "";
	}
	else{
		$working .= $str[$i];
	}
	if($i == $len - 1){
		$array[] = $working;
	}
}
echo "<pre>" , print_r($array, true) , "</pre>";
