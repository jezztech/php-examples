<?php

// URL is get.php?name=Richard

// Not required but prevents use of @$_GET['name']
if(!isset($_GET['name'])) die("Append ?name=yourname to the url!");


$name = $_GET['name'];

if($name == "Richard"){
	echo "I you are either Richard, or a top military spy!!!";
}
else{
	echo "Where did Richard go?!";
}
