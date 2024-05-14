<?php

$ages = [12, 14, 18, 22, 44, 50, 98, 78, 56];
//echo $ages[count($ages) - 1];
//echo end($ages);

$agesFiltered = array_filter($ages, function ($age) {
    return $age > 18;
});

//var_dump($agesFiltered);


$names = ['Gabriel', 'TGOO', 'Company'];

//$names[0] = strtoupper($names[0]);
//$names[1] = strtoupper($names[1]);
//$names[2] = strtoupper($names[2]);

$names = array_map('applyToupper', $names);
function applyToupper($value)
{
    return strtoupper($value);
}

var_dump($names);
?>

<hr>
<pre>
<?php

$origarray1 = array(2.4, 2.6, 3.5);
$origarray2 = array(2.4, 2.6, 3.5);

print_r(array_map('floor', $origarray1)); // $origarray1 stays the same

// changes $origarray2
array_walk($origarray2, function (&$v, $k) {
    $v = floor($v);
});
print_r($origarray2);

// this is a more proper use of array_walk
array_walk($origarray1, function ($v, $k) {
    echo "$k => $v", "\n";
});

// array_map accepts several arrays
print_r(
    array_map(function ($a, $b) {
        return $a * $b;
    }, $origarray1, $origarray2)
);

// select only elements that are > 2.5
print_r(
    array_filter($origarray1, function ($a) {
        return $a > 2.5;
    })
);

?>
</pre>