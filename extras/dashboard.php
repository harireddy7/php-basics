<?php

    session_start();

    $sessionUser = $_SESSION['user'];
    if (isset($sessionUser)) {
        echo "<h1>Welcome $sessionUser </h1>";
        echo "<a href='/basics/extras/logout.php'>Logout</a>";
    } else {
        echo "<h1>Welcome Guest </h1>";
        echo "<a href='/basics/13_sessions.php'>Home</a>";
    }

?>