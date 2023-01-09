<?php
    echo '<h1>Sessions</h1>';

    echo 'Sessions are used to store user info to be used in various pages. Unlike cookies, sessions are stored on the server.<br><br>';

    session_start();

    if (isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        if ($username === 'jon' && $password === '123') {
            $_SESSION['user'] = $username;
            header('Location: /basics/extras/dashboard.php');
        } else {
            echo "<p style='color:red;'>Incorrect credentials</p>";
        }
    }


?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div style="margin: 10px 0;">
        <label for="username">Username:</label><br>
        <input type="text" name="username">
    </div>
    <div style="margin: 15px 0;">
        <label for="password">Password:</label><br>
        <input type="password" name="password">
    </div>
    <div style="margin: 10px 0;">
        <input type="submit" name="submit" value="submit" style="padding: 5 10px; width: 180px;">
    </div>

</form>