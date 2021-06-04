<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - FILE</title>
</head>
<body>
    <h1 align=center>PHP FILE </h1><hr>
 
<?php
    $filesName = $_GET['fich'];
    echo 'Effacer '. $filesName . '...';
    unlink('fichiers/' . $filesName  ) ;

 
?>
<a href="dir2.php">Retour</a>
 
 
<hr>
    
</body>
</html>
 
