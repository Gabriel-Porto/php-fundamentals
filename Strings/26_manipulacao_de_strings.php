<?php
echo '<pre>';

//$state = 'São Paulo/SP';
//$arrayState = explode('/', $state);
//var_dump($arrayState[1]);


//TRANSFORMA UMA STRING EM UM ARRAY, DEFININDO UM SEPARADOR
$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info, 2);
var_dump($arrayInfo);

echo '<hr>';

//TRANSFORMA UM ARRAY EM UMA STRING, DEFININDO UM SEPARADOR
echo implode(' # ', $arrayInfo);