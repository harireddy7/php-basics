<?php
    // single comment
    /*
        multiline comment
    */

    // Variables $VARIABLE
    $greeting = 'Hello there from PHP!!';

    // echo - Output some value
    echo $greeting;

    echo '<br><br>';

    // print - same as echo but only takes one argument
    print $greeting;

    echo '<br><br>';

    var_dump($greeting);

    echo '<br><br>';

    var_dump(1234);

    // print_r([1,2,3,4,])

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello <?php echo 'Barry Allen!'; ?></h1> -->
    <!-- short form for above line 👇 -->
    <h1>Hello <?= 'Barry Allen!'; ?></h1>
</body>
</html>