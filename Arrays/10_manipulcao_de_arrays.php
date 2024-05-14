<?php

$cart = ['Macarão', 'Feijão', 'Arroz', 'Batata'];

echo '<pre>';
arsort($cart);
var_dump($cart);

echo '<hr>';

asort($cart);
var_dump($cart);

echo '<hr>';

sort($cart);
var_dump($cart);