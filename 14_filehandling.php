<?php
    echo "<h1>File Handling</h1>";
    echo "<p>Ability to read and write files on the server</p>";

    $file = 'extras/users.txt';

    if (file_exists($file)) {
        // echo readfile($file);

        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    } else {
        $handle = fopen($file, 'w');
        $contents = 'Jon Snow'.PHP_EOL.'Daenerys'.PHP_EOL.'Tyrion'.PHP_EOL.'Robert'.PHP_EOL.'Eddard';
        fwrite($handle, $contents);
        fclose($handle);
    }

?>