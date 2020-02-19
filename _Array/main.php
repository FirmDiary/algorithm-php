<?php
/**
 * @author: Azal.
 * @date: 2020/2/19
 * @time: 21:05
 */

namespace _Array;
require '../vendor/autoload.php';

$newArray = new ArrayStructure(4);

$newArray->insert(0, 'Hello');
$newArray->insert(1, 'World');

$newArray->insert(2, '!');
$newArray->insert(3, 'haha');

// $newArray->insert(4, 'huhu');

$newArray->delete(3);

echo $newArray->find(3);
echo PHP_EOL;
echo $newArray->show();
