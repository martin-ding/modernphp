<?php 

#spl_stack 堆的使用 先进后出 后进先出

// $spl = new SplStack();
// $spl->push("demo1");
// $spl[] = "zhansan";
// $spl->add(2,"demo3");

// // var_dump($spl->key());

// $spl = new SplStack();
// $spl->push("demo1");
// $spl->push("demo2");
// $spl->push("demo3");
// // var_dump($spl->pop());
// // var_dump($spl->pop());
// // var_dump($spl->pop());


// # spl_queue 队列 先进先出

// $spl = new SplQueue();
// $spl->enqueue("demo1");
// $spl->enqueue("demo2");
// $spl->push("demo3");

// $spl->rewind();
// while ($spl->valid()) {
//     // var_dump($spl->current());
//     // $spl->next();
// }

# spl_minheap 堆 顺序的最小的在最上面 

$spl = new SplMinHeap();
$spl->insert("12");
$spl->insert("13");
$spl->insert("1");

$spl->rewind();

while ($spl->valid()) {
    var_dump($spl->current());
    $spl->next();
}

