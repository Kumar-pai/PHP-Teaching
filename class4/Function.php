<?php

function firstFunction()
{
    echo "Hello Word" . PHP_EOL;
}

firstFunction();

//It is Working, But can be better
function getSushiPrice($sushiName)
{
    return match ($sushiName) {
        "salmon" => 100,
        "tuna" => 150,
        "wagyu" => 300,
    };
}

// php <= 7.4
$price = getSushiPrice("salmon");
echo $price . PHP_EOL;

//Get better
function getSushiPrice2(string $sushiName): int
{
    return match ($sushiName) {
        "salmon" => 100,
        "tuna" => 150,
        "wagyu" => 300,
    };
}

$price = getSushiPrice2("tuna");
echo $price . PHP_EOL;

//PHP >= 8.2
$price = getSushiPrice2(sushiName: "wagyu");
echo $price . PHP_EOL;


// 8.0 才可開始混合宣告/回傳 型別
function calc(float $firstArgument, float $secondArgument, string $operation = "+", bool $ratio = false): float|string
{
    $result = match ($operation) {
        "-" => $firstArgument - $secondArgument,
        "*" => $firstArgument * $secondArgument,
        "/" => $firstArgument / $secondArgument,
        "+" => $firstArgument + $secondArgument,
    };

    if ($ratio) {
        return bcdiv($result, 100, 2) . "%";
    }

    return $result;
}

//7.2
$result = calc(10.5, 5);
echo $result . PHP_EOL;

$result = calc(10.5, 5, "-", true);
echo $result . PHP_EOL;

//8.0
$result = calc(firstArgument: 10.5, secondArgument: 5, operation: "-");
echo $result . PHP_EOL;

$result = calc(firstArgument: 10.5, secondArgument: 5, ratio: true);
echo $result . PHP_EOL;