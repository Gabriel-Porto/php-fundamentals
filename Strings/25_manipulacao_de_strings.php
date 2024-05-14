<?php

$name = 'EspecializaTi - Curso PHP';

// DEIXA TODAS AS LETRAS DA STRING UPPERCASE.
echo strtoupper($name);
echo '<hr>';
// DEIXA TODAS AS LETRAS DA STRING LOWERCASE
echo strtolower($name);
echo '<hr>';
// DEIXA APENAS A PRIMEIRA LETRA DA PRIMEIRA PALAVRA UPPERCASE, E SE JÁ EXISTIR UMA LETRA UPPERCASE NA STRING ELE MANTÉM TAMBÉM.
echo ucfirst(strtolower($name));
echo '<hr>';
// DEIXA APENAS AS PRIMEIRAS LETRAS DE CADA PALAVRA UPPERCASE.
echo ucwords(strtolower($name));
