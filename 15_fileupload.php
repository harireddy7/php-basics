<?php
    echo "<h1>File uploading</h1>";

    // echo PHP_VERSION;

    if (isset($_POST['submit'])) {
        if (!empty($_FILES['upload']['name'])) {
            $allowed_exts = array('png', 'jpeg', 'jpg', 'gif', 'txt');

            $filename = basename($_FILES["upload"]["name"]);
            $file_temp = $_FILES['upload']['tmp_name'];
            $filesize = $_FILES['upload']['size'];
            $file_ext_array = explode('.', $filename);
            $file_ext = strtolower(end($file_ext_array));

            $target_dir = __DIR__ . "/uploads/$filename";

            // echo "<div>File details: <br>$filename<br>$file_ext<br>$file_temp<br>$target_dir</div>";


            if (in_array($file_ext, $allowed_exts)) {
                if ($filesize < 1000000) {
                    $return_type = move_uploaded_file($file_temp, $target_dir);
                    if ($return_type) {
                        $message = "<p style='color: green;'>File uploaded successfully!</p>";
                        $selected_file = "uploads/$filename";
                    } else {
                        $message = "<p style='color: green;'>Upload failed!</p>";
                    }
                } else {
                    $message = '<p style="color: red;">File is too large!</p>';    
                }
            } else {
                $message = '<p style="color: red;">Invalid file type!</p>';    
            }

            // echo "<br>> Uploading $filename of size $filesize bytes to <b>$target_dir</b>";
        } else {
            $message = '<p style="color: red;">Please choose a file!</p>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fileupload</title>
</head>

<body style="padding: 20px;">
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" style="margin-top: 15px;">
        Select a file:
        <input type="file" name="upload" />
        <div style="margin-top: 15px;">
            <input type="submit" value="Submit" name="submit">
        </div>
        <hr>
        <div style="margin-top: 15px;display:<?php echo $selected_file ? 'block' : 'none'  ?>">
            <img src="./<?php echo $selected_file ?>" width="650px" />
        </div>
    </form>
</body>

</html>