<?php

    // 1. Simple Array
    $numbers  = [1,44,55];
    $fruits = array('grapes', 'apple', 'mango');

    // print_r($numbers);
    // var_dump($fruits);
    // var_dump($numbers[3]);

    // 2. Associative Array => like Javascript Object
    $colors = [
        1 => 'red',
        3 => 'black',
        7 => 'yellow'
    ];

    // var_dump($colors);

    $user = [
        'name' => 'Barry',
        'age' => 24,
        'city' => 'Central city'
    ];

    // echo($user['name'] . ' is from ' . $user['city']);


    $justice_leage = [
        [
            'name' => 'Clark',
            'age' => 27,
            'city' => 'Metropolis'
        ],
        [
            'name' => 'Bruce',
            'age' => 28,
            'city' => 'Gotham city'
        ],
        [
            'name' => 'Barry',
            'age' => 24,
            'city' => 'Central city'
        ]
    ];

    // echo($justice_leage[0]['name'] . ' is from ' . $justice_leage[0]['city']);
    // echo('<br>');
    // echo($justice_leage[1]['name'] . ' is from ' . $justice_leage[1]['city']);
    // echo('<br>');
    // echo($justice_leage[2]['name'] . ' is from ' . $justice_leage[2]['city']);


    var_dump(json_encode(($justice_leage)));


?>