<?php

$fruits = array(
	'apple' => 'apple value',   //position = 0
	'orange' => 'orange value', //position = 1
	'grape' => 'grape value',
	'plum' => 'plum value'
);

print_r($fruits);
echo "***** use fruits firectly" . "\n";

foreach ($fruits as $key => $value) {
	echo $key . ":" . $value . "\n";
}

$obj = new ArrayObject($fruits);
$it = $obj->getIterator();

echo "***** use ArrayObject" . "\n";
foreach ($it as $key => $value) {
	echo $key . ":" . $value . "\n";
}


echo "***** use ArrayObject while" . "\n";
$it->rewind();
while ($it->valid()) {
	echo $it->key() . ":" . $it->current() . "\n";
	$it->next();
}

echo "***** use ArrayObject seek before while" . "\n";
// 跳过某些元素开始打印
$it->rewind();
if ($it->valid()) {
	$it->seek(1);
	while ($it->valid()) {
		echo $it->key() . ":" . $it->current() . "\n";
		$it->next();
	}
}

echo "***** use ksort" . "\n";  //对键排序
$it->ksort();
foreach ($it as $key => $value) {
	echo $key . ":" . $value . "\n";
}

echo "***** use asort" . "\n";  //对值排序
$it->asort();
foreach ($it as $key => $value) {
	echo $key . ":" . $value . "\n";
}