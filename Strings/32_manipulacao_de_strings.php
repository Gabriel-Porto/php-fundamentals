<?php

$password = '123456444';

//echo md5($password);
//echo sha1($password);
//echo crypt($password, $salt);
$passCr = base64_encode($password);
//echo $passCr;
//echo base64_decode($passCr);
//echo hash('sha512', $password);

echo cryptC($password);

function cryptC(String $value): String
{
    return hash('sha512', sha1(md5(crypt($value, 'asalOOHSAAUYSGISB@#!@$@#DAdawd'))));
}