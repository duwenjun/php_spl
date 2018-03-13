<?php

/*
	数据结构
	双向链表， 堆栈， 队列， 堆， 降序堆， 升序堆， 优先级队列， 定长数据， 对象容器
		

	堆栈:  First In Last Out  FILO	
	队列:  First In First Out  FIFO	

 */

echo "hello world";

// $queue = new SplQueue();

$obj = new SplDoublyLinkedList();
$obj->push(1);
$obj->push(2);
$obj->push(3);
$obj->unshift(10);
print_r($obj);

//rewind操作用于把节点指向bottom所在节点
echo $obj->rewind() . "\n";

echo 'current: ' . $obj->current() . "\n";

//是指针指向下一个节点
$obj->next();

echo 'next node: ' . $obj->current() . "\n";

$obj->next();
$obj->next();

//
$obj->prev();

echo 'next node: ' . $obj->current() . "\n";

$obj->next();
$obj->next();
echo 'next node: ' . $obj->current() . "\n";

if ($obj->current()) {
	echo 'Current node valid' . "\n";
} else {
	echo 'Current node invalid' . "\n";
}

$obj->rewind();
// 如果当前节点是有效节点，valid返回true
if ($obj->valid()) {
	echo 'valid list' . "\n";
} else {
	echo 'invalid list' . "\n";
}

/*
class mySplDoubleLinkedList extends SplDoublyLinkedList{

	public function rewind(){

	}

	public function current(){

	}

	public function next(){

	}

	public function prev(){

	}

	public function push(){

	}

	public function unshift(){

	}

	public function pop(){

	}

	public function shift(){

	}

	public function bottom(){

	}

	public function top(){

	}

	public function offsetExists(){

	}

	public function offsetGet(){

	}

	public function offsetSet(){

	}

	public function offsetUnset(){

	}

}*/