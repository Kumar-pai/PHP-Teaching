<?php

namespace App\Uc;

class Gundam
{
    function name(): void
    {
        echo "RX-78 出発する" . PHP_EOL;
    }
}

//根據 PSR 規範
namespace App\Ac;
class Gundam
{
    function name(): void
    {
        echo "XXXG-01W 出発する" . PHP_EOL;
    }

}
