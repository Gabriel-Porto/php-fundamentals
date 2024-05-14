<?php

$taxa = 2;

function sum(int $a, int $b): Array
{
    global $taxa;

    $teste = 12;
    $soma = ($a + $b) * $taxa;

    return [
        'teste' => $teste,
        'soma' => $soma
    ];
//    return ($a + $b) * $taxa;
}
echo '<br>';

$result = sum(1, 2)['teste'];
var_dump($result);

//echo sum(2, 2);


