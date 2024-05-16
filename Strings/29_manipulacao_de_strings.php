<?php

$name = 'Gabriel Porto';

//Checa se a variável existe
if (isset($name))
    echo $name;
else
    echo 'Não existe';

//Deleta a variável
unset($name);
echo '<br>';

if (isset($name))
    echo $name;
else
    echo 'Não existe!';