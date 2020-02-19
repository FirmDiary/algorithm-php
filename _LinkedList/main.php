<?php
/**
 * @author: Azal.
 * @date: 2020/2/19
 * @time: 21:05
 */

namespace _LinkedList;
require '../vendor/autoload.php';

$linked = new SingleLinkedList();

$linked->append(333);
$linked->append(444);
$linked->append(2222);
$linked->deleteLastOne();
$linked->append(555);
$linked->deleteByValue(555);
$linked->append(666);
$linked->append(777);
$linked->deleteLastOne();
echo $linked->show();
