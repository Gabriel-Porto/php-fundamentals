<?php

function fatorial(int $n): int
{
    if ($n > 1)
        $n *= fatorial($n - 1);

    return $n;
}

echo fatorial(4);

