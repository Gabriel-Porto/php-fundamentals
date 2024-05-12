<?php

$infoCompany = [
    'name' => 'TGOO',
    'founder' => 'Michel Oliveira',
    'year_current' => '2024'
];

$infoCompany2 = [
    'lala' => 'Apple',
    'lele' => 'Steve Jobs',
    'year_current' => 2024
];

//var_dump(array_keys($infoCompany));

//var_dump(array_values($infoCompany));

//var_dump(count($infoCompany));

$infoCompany = array_merge($infoCompany, $infoCompany2);

echo '<pre>';
var_dump($infoCompany);
echo '</pre>';