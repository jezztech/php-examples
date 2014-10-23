<?php

foreach(range(0, 10) as $n) echo $n , '<br>';

$array = array("Hello", "Hi", "Hey", "Bye");
foreach($array as $value){
	echo $value , ' ';
}

$assoc = array(
	"key1" => "val1",
	"key2" => "val2",
	"key3" => "val3", // <--
);
// Having a trailing comma after the last defined array entry, while unusual, is a valid syntax.
foreach($assoc as $key => $val):
	echo "$key => $val <br>";
endforeach;