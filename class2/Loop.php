<?php
$array = [1, 2, 3, 4, 5];

echo "[For]" . PHP_EOL;
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i]. PHP_EOL;
}

echo "[Foreach 1]" . PHP_EOL;
foreach ($array as $value) {
    echo $value . PHP_EOL;
}

echo "[Foreach 2]" . PHP_EOL;
$map = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
foreach ($map as $key => $value) {
    echo "Key: $key, Value: $value" . PHP_EOL;
}

//While
echo "[While]" . PHP_EOL;
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

echo PHP_EOL;

//Do While
echo "[Do While 1]" . PHP_EOL;

$i = 0;

do {
    $i++;
    echo $i;
} while ($i < 10);

echo PHP_EOL;

echo "[Do While2 ]" . PHP_EOL;
$i = 5;

do {
    $i++;
    echo $i;
} while ($i < 5);

echo PHP_EOL;