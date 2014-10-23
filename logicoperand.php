<?php

$v1 = true;

$v2 = true;

if($v1 == true && $v2 == false) echo "They are both different.";

if($v1 == false || $v2 == false) echo "One is true.";

if(!$v1) echo "v1 is false.";

$switch1 = true;
$switch2 = true;

if($switch1 xor $switch2) echo "Light is off.";
$switch2 = false;
if($switch1 xor $switch2) echo "Light is on!!";

