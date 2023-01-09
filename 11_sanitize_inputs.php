<?php

/* We can pass data through URLs and FORMs using $_GET and $_POST superglobals */

    if (isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Name: $name<br>";
        echo "Age: $age<br><br>";
    }

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" name="age">
    </div>
    <div>
        <input type="submit" name="submit" value="submit">
    </div>

</form>