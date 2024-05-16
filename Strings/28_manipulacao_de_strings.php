<?php

$domain = 'www.tgoo.world';

$domain = str_replace('www.', 'https://www.', $domain);
var_dump(substr($domain, 8));

$protocol = substr($domain, 0, 8);
if ($protocol == 'https://')
    echo 'É seguro!';
else
    echo 'Não é seguro!';

var_dump(substr($domain, 12));

echo strlen($domain);

