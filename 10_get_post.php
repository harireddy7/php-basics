<?php

/* We can pass data through URLs and FORMs using $_GET and $_POST superglobals */

    if (isset($_POST['submit'])) {
        echo $_POST['name'];
        echo $_POST['age'];
        echo '<br><br>';
    }

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=barry&age=25">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name="age">
    </div>
    <div>
        <input type="submit" name="submit" value="submit">
    </div>

</form>