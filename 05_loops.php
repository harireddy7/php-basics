<?php

    // For loop
    // for ($i = 0; $i < 10; $i++) {
    //     echo $i + 1 . '<br>';
    // }


    // While loop
    // $i = 0;
    // while($i < 10) {
    //     echo $i + 1 . '<br>';
    //     if ($i === 9) echo 'Exiting while loop!';
    //     $i++;
    // }


    // // Do While loop
    // $i = 10;
    // do {
    //     echo $i . '<br>';
    //     $i--;
    // } while($i > 0)



    // Foreach loop

    $posts = ['one','two', 'three'];
    
    // for ($x = 0; $x < count($posts); $x++) {
    //     echo "Post $posts[$x]<br>";
    // }

    // foreach($posts as $post) {
    //     echo "Post $post<br>";
    // }

    // foreach with index
    // foreach($posts as $index => $post) {
    //     echo "[$index] Post $post<br>";
    // }

    $user = [
        'name' => 'Barry',
        'age' => 24,
        'city' => 'Central city'
    ];

    foreach($user as $key => $value) {
        echo "$key - $value !!<br>";
    }


?>