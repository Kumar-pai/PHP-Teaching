<?php
/**
 * PHP 常見型別
 * integer
 * string
 * bool
 * float
 * null
 */

echo gettype(TRUE) . PHP_EOL;
echo gettype(123) . PHP_EOL;
echo gettype(123.4) . PHP_EOL;
echo gettype("Hello") . PHP_EOL;
echo gettype(null) . PHP_EOL;


/**
 * PHP 資料結構
 * array
 */
echo gettype([]) . PHP_EOL;

/*
 * 變數宣告
 * 動態程式語言 可隨時宣告變數
 */
$firstVariable = "My First Variable";
echo $firstVariable . PHP_EOL;

/*
 * 常數
 */
const THIS_IS_CONST = "const";
echo THIS_IS_CONST . PHP_EOL;

?>