<?php

    // echo "<h1>Array Functions</h1><hr>";

    $league = ['superman', 'batman'];

    // Length
    // echo count($league);

    // Search value in array
    // var_dump(in_array('wonder woman', $league));

    // Add to array
    $league[] = 'wonder woman';
    array_push($league, 'flash', 'green lantern');
    array_unshift($league, 'martian manhunter', 'hawkgirl');


    // Remove from array
    array_pop(($league));
    array_shift($league);
    // unset($league[0]);

    // print_r($league);

    // split array into chunks
    $chunked_array = array_chunk($league, 2);

    // print_r($chunked_array);


    // concatenate arrays


    // $arr1 = [1, 2, 3];
    // $arr2 = [4, 5, 6];


    // $arr3 = array_merge($arr1, $arr2);
    // $arr4 = [...$arr2, ...$arr1]; // spread operator

    // // print_r($arr3);
    // print_r($arr4);


    $a = ['name', 'place', 'power'];
    $b = ['barry', 'central city', 'superspeed'];

    // combine arrays as key value pairs
    $c = array_combine($a, $b);

    // print_r($c);

    $keys = array_keys($c);
    // print_r($keys);

    $values= array_values($c);
    // print_r($values);


    // flip array - flip keys & values
    $flipped = array_flip($c);
    // print_r($flipped)


    $numbers = range(1, 10);
    // print_r($numbers);


    // ARRAY MAP
    $new_numbers = array_map(function($number){
        return "Number $number";
    }, $numbers);

    // print_r($new_numbers);

    // ARRAY FILTER
    $lessThan5 = array_filter($numbers, fn($num) => $num < 5) ;

    // print_r($lessThan5);


    // ARRAY REDUCE
    $reduce_sum = array_reduce($numbers, fn($carry, $num) => $carry + $num);

    var_dump($reduce_sum);



?>