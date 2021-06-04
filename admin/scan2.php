<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - FILE</title>
</head>
<body>
    <h1 align=center>PHP FILE </h1><hr>
 
<?php
$dir    = './fichiers';
 
$files1 = scandir($dir);

    echo '<tt><table border>';
    echo '<th>Nom</th><th>Supprimer</th><th>Modifier</th>' ;
    
    foreach ($files1 as $key =>$value ) {
    
    
    echo '<tr><td>'.$key . ' : ' .$value .'<br>'.'</td>';
    echo '<td>';

    if ( ! is_dir('fichiers/' .$value) )

        echo "<a href='Supprimer.php?fich=".$value."'>Supp</a>";
    else echo 'DIR';
        echo '</td>';
    //echo "<td><a href='Supprimer.php?fich=".$key ."'>Supp</a></td>";
    echo"</tr>";
    
}
echo '</table></tt>';
echo '<hr>';
 
?>
 
 
<hr>
    
</body>
</html>
 
