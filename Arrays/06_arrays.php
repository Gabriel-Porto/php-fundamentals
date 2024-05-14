<?php

//$cars = array(1, 'Carlos', 12.3);
//
//var_dump($cars);

$car = [
    'cor' => 'Branco',
    'portas' => 4,
    'ano' => 2018,
];
$car['airbag'] = false;
$car['som'] = 'Model 123';


//echo $car['som'];


$cars = [
    'Mercedes' => [
        'color' => 'black',
        'motor' => 5.2,
    ],
    'Ford' => [
        'color' => 'red',
        'motor' => 4.2,
    ],
    'Ferrari' => [
        'color' => 'blue',
        'motor' => 2.2,
    ],
];

echo $cars['Mercedes']['motor'];


