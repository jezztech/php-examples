<?php

$str	=	"The quick brown fox jumps over a lazy dog.";

// The short way!
$pos	=	strpos($str, 'x');
if($pos === false)	echo 'The letter x isn\'t found in "$str"';
else				echo "The first occurrence of an 'x' in \"$str\" is at $pos.";

// The long way!
$len	=	strlen($str);
$find	=	"x";
$found = false;
for($i = 0; $i < $len; $i++){
	if($str[$i] == $find){
		echo "Found $find at position: $i";
		$found = true;
		break;
	}
}
if(!$found)	echo "$find was not found!";