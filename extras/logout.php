<?php
    session_start();

    session_destroy();

    header('Location: /basics/13_sessions.php');

?>