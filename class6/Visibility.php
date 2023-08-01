<?php

class Gundam
{
    /**
     * Class 內宣告全域變數
     * public 所有人都可使用，也可被外部呼叫
     * protected 只有自己和繼承自己的人可呼叫
     * private 只有自己可呼叫
     */
    public string $era = 'UC';
    protected string $driver = "アムロ・レイ";
    private string $plaModel = "RX-78";

    public function echoModel(): void
    {
        //取用全域變數時使用 $this 取得
        echo $this->plaModel . PHP_EOL;
    }

    public function setOffGundam(): void
    {
        echo $this->driver . " 出発する!" . PHP_EOL;
    }
}

$gundam = new Gundam();
//取得 Object 宣告變數
echo $gundam->era . PHP_EOL;
$gundam->echoModel();
$gundam->setOffGundam();
//無法被取用
echo $gundam->driver;