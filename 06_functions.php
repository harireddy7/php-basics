<?php

    echo '<h1>Functions</h1><hr>';

    // $global_num = 10;

    // function registerUser() {
    //     $local_num = 7;
    //     global $global_num;

    //     echo '<br>User added to db!<br>';
    //     echo "Global in function:: $global_num <br>";
    //     echo "Local in function:: $local_num";
    // }
    
    // echo "Global outside function:: $global_num";
    // registerUser();
    // echo "Local outside function:: $local_num";


    // $email is an argument
    // function register($email) {
    //     echo "$email is registered!";
    // }

    // // 'barry' is parameter
    // register('barry');


    // Function with default values
    // function add($num1 = 5, $num2 = 5) {
    //     return $num1 + $num2;
    // }

    // // echo add(7, 10);
    // $total = add(7);
    // echo $total;


    // Annonymous function
    // $subtract = function($num1, $num2) {
    //     return $num1 - $num2;
    // };

    // echo $subtract(15, 5);



    // Arrow function
    $multiply = fn($num1, $num2) => $num1 * $num2;

    echo $multiply(3, 15);


?>