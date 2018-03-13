<?php

$obj = new SplQueue();
$obj->enqueue('a');
$obj->enqueue('b');
$obj->enqueue('c');

print_r($obj);

echo "Bottom: " . $obj->bottom() . "\n";
echo "Top: " . $obj->top() . "\n";

$obj->offsetSet(0, 'A');
print_r($obj);

$obj->rewind();
echo 'Current:' . $obj->current() . "\n";


print_r($obj);

// 遍历堆栈
while ($obj->valid()) {
	echo $obj->key() . "=>" . $obj->current() . "\n";
	$obj->next();
}

echo 'dequeue:' . $obj->dequeue() . "\n";
print_r($obj);