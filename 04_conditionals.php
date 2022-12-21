<?php

    $age = 20;

    // if ($age >= 18) {
    //     echo 'You are a major!';
    // } else {
    //     echo 'You are a minor!';
    // }

    $dateString = date('j F Y, h:i:s A');

    // echo $dateString;

    $t = date('H');

    // if ($t < 12) {
    //     echo 'Good Morning';
    // } else if ($t >= 12 && $t <= 18) {
    //     echo 'Good Evening';
    // } else {
    //     echo 'Good Night';
    // }

    $posts = ['first post'];

    // if (!empty($posts)) {
    //     var_dump($posts);
    // } else {
    //     echo 'No Posts';
    // }

    // echo empty($posts) ? 'No Posts' : $posts[0];

    // $firstPost = !empty($posts) ? $posts[0] : null;

    // $firstPost = $posts[0] ?? null;

    // echo $firstPost;

    
    $favHouse = 'Stark';

    switch($favHouse) {
        case 'Targaryen':
            echo 'Fire and blood 🐉';
            break;
        case 'Lannister':
            echo 'Hear me roar 🦁';
            break;
        case 'Stark':
            echo 'Winter is coming 🐺';
            break;
        case 'Baratheon':
            echo 'Ours is the Fury 🦌';
            break;
        default:
        echo 'Hello Wilding 🧔';
    }


?>