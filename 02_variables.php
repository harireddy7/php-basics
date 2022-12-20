<?php

    /*
        String
        Integer
        Float
        Boolean
        Array
        Object
        NULL
        Resource
    */

    $name = 'Kal-El'; // String
    $place = 'Krypton'; // String
    $age = 35; // Integer
    $isAlien = true; // Boolean
    $balance = 25.758; // Float

    // echo $name;
    // echo $age;
    // echo $isAlien;
    // echo $balance;
    // var_dump($balance)

    // STRING CONCATENATION
    $alienText = $isAlien ? ' and I am an Alien from ' . $place : '';

    // echo 'I am ' . '<strong>' . $name . '</strong>' . $alienText;


    // MATH OPERATIONS
    // var_dump('5' + 5) // int(10)
    // var_dump('5' - 5) // int(0)
    // var_dump(10 * 3) // int(30)
    // var_dump(10 / 3) // float(3.333333333)
    // var_dump(10 % 3) // int(1)

    // CONSTANTS
    define('HOST', 'localhost');
    define('DB_NAME', 'dev_db');
    // echo HOST;
    echo DB_NAME;

?>