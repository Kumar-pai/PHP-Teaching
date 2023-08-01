<?php

/**
 * ''：不支援變數插入
 * ""：支援變數插入
 * ` `：執行 shell
 */

$years = 2022;
echo 'This years $years' . PHP_EOL;
echo "This years {$years}" . PHP_EOL;
echo "This years $years" . PHP_EOL;
echo `pwd`;
//字串串接 .
echo "2023" . "-" . "01" . "-" . "01" . PHP_EOL;

//字串運算
$a = "10";
$b = 10;
echo ($a + $b) .  PHP_EOL;