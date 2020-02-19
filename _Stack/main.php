<?php
/**
 * @author: Azal.
 * @date: 2020/2/19
 * @time: 21:05
 */

namespace _Stack;
require '../vendor/autoload.php';

$linked = new StackOnLinkedList();

echo '链式栈：' . PHP_EOL;
$linked->pushValue(111);
$linked->pushValue(222);
$linked->pushValue(333);
$linked->pushValue(444);
$linked->pushValue(555);
$linked->pop();
$linked->pop();
echo $linked->show();

echo PHP_EOL . '顺序栈：' . PHP_EOL;

$linked = new StackOnArray(10);
$linked->push(111);
$linked->push(222);
$linked->push(333);
$linked->push(444);
$linked->push(555);
$linked->pop();
$linked->pop();
echo $linked->show();
