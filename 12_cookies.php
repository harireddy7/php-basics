<?php

    echo '<h1>Cookies</h1>';

    echo 'Cookies store non-sensitive user information.<br>';
    

    // Set cookie
    setcookie('name', 'Jon Snow', time() + 86400 * 30); // 30day expiry

    if (isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }


    setcookie('name', '', time() - 86400);

?>
