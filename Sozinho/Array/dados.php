<?php

    $array1 = [
        10,
        11,
        11,
        12,
        12,
        14
    ];
    $array2 = [
        25,
        78,
        11,
        35
    ];

    array_unique($array);

    echo "<pre>";
    echo $array1;
    echo "</pre>";

    echo "<hr>";

    $array = [
        'nome' => 'Marco',
        'Escola' => 'IFBA',
        'endereco' => NULL
    ];

    echo "<pre>";
    print_r(array_filter($array));
    echo "</pre>";

    $filter =  array_filter($array, function($value){
        return !is_null($value);
    });

    echo "<pre>";
    print_r($filter);
    echo "</pre>";

    echo "<hr>";

    echo "<pre>";
    print_r(array_diff($array1,$array2));
    echo "</pre>";

    echo "<hr>";

    echo "<pre>";
    print_r(array_intersect($array1,$array2));
    echo "</pre>";

    echo "<hr>";

    echo "<pre>";
    print_r(array_intersect($array,'nome'));
    echo "</pre>";

    //array combine combina dois arrays

    $letras = [
        'A',
        'B'
    ];

    echo "<pre>";
    print_r(array_pad($letras,10,'sem posição'));//define tamanho minimo para um array
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

    $map = array_map(function($value){
        $value['nome'] = strtolower($value['nome']);
        return $value;
    }, $array);
