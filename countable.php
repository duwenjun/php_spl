<?php

// The People's Republic of China
date_default_timezone_set('PRC');
$array = array(
	array('name' => 'Jonathan', 'id' => 5),
	array('name' => 'Peter', 'id' => 6),
	array('name' => 'Lisa', 'id' => 7)
	);

echo count($array)  . "\n";
echo count($array[1]) . "\n";