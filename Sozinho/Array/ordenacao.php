<?php

$array = [
    'banana',
    'goiaba',
    'laranja'
];
$array[] = 'pera';//Add na ultima posição disponivel
$array[6] = 'maça';
$array[2] = 'uva';

sort($array);//coloca o array em ordem cresente, porem muda as chaves

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

asort($array);//mesma coisa do sort, porem n muda as chaves

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";
rsort($array);//coloca o array em ordem decresente, porem muda as chaves

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";
rsort($array);//coloca o array em ordem decresente, porem muda as chaves

echo "<pre>";
arsort($array);
echo "</pre>";

echo "<hr>";
ksort($array);//coloca o array em ordem crescente com base nas chaves

echo "<pre>";
arsort($array);
echo "</pre>";

echo "<hr>";
krsort($array);//coloca o array em ordem decrescente com base nas chaves

echo "<pre>";
arsort($array);
echo "</pre>";

echo "<hr>";

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

usort($array3,function($a,$b){
    if($a['idade'] == $b['idade']) return 0;

    return $a['idade'] < $b['idade'] ? -1 : 1;
});

echo "<pre>";
print_r($array3);
echo "</pre>";


uasort($array3,function($a,$b){
    if($a['idade'] == $b['idade']) return 0;

    return $a['idade'] < $b['idade'] ? -1 : 1;
});

echo "<pre>";
print_r($array3);
echo "</pre>";

echo "<hr>";

shuffle($array);//Aleatorio

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

natsort($array);//ordenação natural

echo "<pre>";
print_r($array);
echo "</pre>";