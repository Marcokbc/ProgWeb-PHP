<?php

$array = [
    'banana',
    'goiaba',
    'laranja'
];
$array[] = 'pera';//Add na ultima posição disponivel
$array[6] = 'maça';
$array[2] = 'uva';

echo "<pre>";
print_r($array);
echo "</pre>";



echo "<hr>";

$array2 = [
    'nome' => 'Marco',
    'idade' => 17
];
$array2['instagram'] = 'marco.antoniomdl';
$array2['idade'] = 18;

echo "<pre>";
print_r($array2);
echo "</pre>";

echo "<hr>";

echo "<h2>Array multidimensional</h2>";

$array3 = [
    'pessoas' => [
        [
            'id' => '1',
            'nome' => 'Marco',
            'idade' => 17
        ],
        [
            'id' => '2',
            'nome' => 'João',
            'idade' => 17
        ]
    ]
];

echo "<pre>";
print_r($array3);
echo "</pre>";

echo "<hr>";

echo "<h2>Obtendo valores dos arrays</h2>";
echo "<pre>";
print_r($array3['pessoas'][0]['nome']);
echo "</pre>"; 
