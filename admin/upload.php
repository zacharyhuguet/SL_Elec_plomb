<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - FILE</title>
</head>
<body>
    <h1 align=center>PHP FILE </h1><hr>

<?php
    echo '<br>name = ' . $_FILES ["monFichier"]["name"];
    echo '<br>size = ' . $_FILES ['monFichier']['size'];
    echo '<br>type = ' . $_FILES ['monFichier']['type'];
    echo '<br>tmp_name = ' . $_FILES ['monFichier']['tmp_name'];
    $files_name = $_FILES ["monFichier"]["name"];
    $files_tmp = $_FILES  ['monFichier']['tmp_name'];

    
$dir    = 'fichiers';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);

?>
<hr>
    
</body>
</html>