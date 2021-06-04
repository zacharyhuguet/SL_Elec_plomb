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
$files2 = scandir($dir, 1);
 /*
var_dump($files1);
var_dump($files2); 
 */
 
for ( $i = 0 ; $i < count($files1) ; $i++ ) {
    $value = $files1[$i] ; 
    echo $i . ' : ' . $value . '<br>';
 
}
 
echo '<hr>';
 
foreach ($files1 as $value) {
echo $value . '<br>';
}
echo '<hr>';
 
foreach ($files1 as $key =>$value ) {
    echo $key . ' : ' .$value .'<br>';
}
 
echo '<hr>';
 
?>
 
 
<hr>
    
</body>
</html>
 
