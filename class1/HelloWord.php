<?php
/*
 * <?php ?> 宣告 php 的 Block
 * PHP 動態 弱型別 腳本式 直譯語言
 * 多行註解
*/

//單行註解
#這也是單行註解

echo "Hello Word!" . PHP_EOL;

print_r("Hello World!" . PHP_EOL);

/**
 * PHP 變數宣告用 $ 字宣告
 * 變數命名規則 小駝峰
 * Coding Style: PSR https://www.php-fig.org/psr/psr-12/
 */
$helloVariable = "Hello Variable!";

echo $helloVariable;

//什麼是腳本語言 由上往下執行，到這邊才會出錯
echo $helloWord;

?>