<?php
/**
 * 引用程式碼
 * 會被重複引入
 * include() 引入時發生錯誤，忽略錯誤且繼續執行
 * require() 引入時發生錯誤，會直接停止程式的執行
 *
 * 只會引入一次
 * include_once()
 * require_once()
 */
require_once('./namespace.php');
include("./Function.php");

// 建立命名空間的別名
use App\Uc\Gundam;
use App\Ac\Gundam AS AcGundam;

//使用 new Object
$gundam1 = new Gundam();
$gundam1->name();

$gundam2 = new AcGundam();
$gundam2->name();
