<?php

$cart = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];

//RETIRA O ULTIMO VALOR
array_pop($cart);

//RETIRA O PRIMEIRO VALOR
array_shift($cart);

//RETIRA UM VALOR DO ARRAY PELA POSIÇÂO
unset($cart[1]);

// ADICIONA VALOR NO FINAL
array_push($cart, 'Tapete');

// ADICIONA VALOR NO COMEÇO
array_unshift($cart, 'Rodo');

// DELETA VALORES REPETIDOS
$cart = array_unique($cart);
