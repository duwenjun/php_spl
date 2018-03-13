<?php

$stack = new SplStack();
$stack->push('a');
$stack->push('b');
$stack->push('c');

print_r($stack);
echo "Bottom: " . $stack->bottom() . "\n";
echo "Top: " . $stack->top() . "\n";
// 堆栈的offset=0是Top所在的位置 offset=1是top节点靠近bottom位置的相邻节点，以此类推
// 
$stack->offsetSet(0, 'C');
print_r($stack);

$stack->rewind();
echo 'Current:' . $stack->current() . "\n";
$stack->next();
echo 'Current:' . $stack->current() . "\n";

$stack->rewind();

// 遍历堆栈
while ($stack->valid()) {
	echo $stack->key() . "=>" . $stack->current() . "\n";
	$stack->next();
}

// 删除堆栈元素
$popObj = $stack->pop();
echo 'popObj: ' . $popObj . "\n"; 
print_r($stack);