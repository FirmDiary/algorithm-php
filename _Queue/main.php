<?php
/**
 * @author: Azal.
 * @date: 2020/2/28
 * @time: 21:43
 */

namespace _Queue;
require '../vendor/autoload.php';


echo PHP_EOL . '顺序队列：' . PHP_EOL;
$queue = new QueueOnArray();

$queue->enqueue(666);
$queue->enqueue(777);
$queue->enqueue(888);
echo '出：' . $queue->dequeue() . PHP_EOL;
echo '出：' . $queue->dequeue() . PHP_EOL;
$queue->enqueue(999);
$queue->enqueue(9991);
echo $queue->show();


echo PHP_EOL . '链式队列：' . PHP_EOL;
$queue = new QueueOnLinkedList();

$queue->enqueue(666);
$queue->enqueue(777);
$queue->enqueue(888);
echo '出：' . $queue->dequeue() . PHP_EOL;
echo '出：' . $queue->dequeue() . PHP_EOL;
$queue->enqueue(999);
$queue->enqueue(9991);
echo $queue->show();
