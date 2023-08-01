<?php

//Array 有序
$array = [1, 2, 3, 4, 5];
//Add element to array
$array[] = 6;
//[1, 2, 3, 4, 5, 6]

echo "[Array]" . PHP_EOL;
echo $array[0] . PHP_EOL;
echo $array[1] . PHP_EOL;
echo $array[5] . PHP_EOL;

//Map Array array
$map = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

echo "[Map]" . PHP_EOL;
echo $map['a'] . PHP_EOL;
echo $map['b'] . PHP_EOL;