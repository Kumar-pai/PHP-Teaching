<?php

class Ferrari
{
    function model(): void
    {
        echo "Portofino M." . PHP_EOL;
    }
}

class Porsche
{
    function model(): void
    {
        echo "911 Dakar" . PHP_EOL;
    }
}

$car1 = new Ferrari();
$car1->model();

$car2 = new Porsche();
$car2->model();