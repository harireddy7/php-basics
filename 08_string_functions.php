<?php

    $text = 'Hello World!';

    $length = strlen($text);
    echo "Length: $length <br><br>";

    $firstPos = strpos($text, 'l');
    echo "First position of 'l': $firstPos <br><br>";

    $lastPos = strrpos($text, 'l');
    echo "Last position of 'l': $lastPos <br><br>";

    $reverse = strrev($text);
    echo "Reversed: $reverse <br><br>";

    $lowercase = strtolower($text);
    echo "Lowercase: $lowercase <br><br>";

    $uppercase = strtoupper($text);
    echo "Uppercase: $uppercase <br><br>";

    $upperword = ucwords($text);
    echo "Uppercase first letter of word: $upperword <br><br>";

    $replaced = str_replace('World', 'Everyone', $text);
    echo "Replaced: $replaced <br><br>";

    $substr1 = substr($text, 0, 5);
    echo "Substring from 0-5: $substr1 <br><br>";

    $substr2 = substr($text, 5);
    echo "Substring from 5-end: $substr2 <br><br>";

    $startswith = str_starts_with($text, 'Hell');
    echo "startswith: $startswith <br><br>";

    $string2 = "<script>alert('boom!')</script>";
    echo htmlspecialchars($string2);
    echo '<br><br>';

    printf('%s likes to %s', 'Barry', 'Run');
    echo '<br><br>';

    printf('1 + 1 = %d', 1 + 1);
    echo '<br><br>';

    printf('3 / 2 = %f', 3/2);

?>