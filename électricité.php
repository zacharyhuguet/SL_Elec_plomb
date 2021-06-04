<?php 
    $auth = 0;
    include 'lib/includes.php';
    include 'partials/header.php'; 
?>


<link rel="stylesheet" href="css/style.css">

<script src='js/diapo.js'></script>
<script src="https://kit.fontawesome.com/7ccc695b8a.js" crossorigin="anonymous"></script>

<body onload="init()">


<div class="diapoconteneur">
        <img class="fleche" src="image/flecheGauche.jpg" onClick='suivant();'>
        <img class="diapo" name='img1' src='électricité/1.jpg'>
        <img class="diapo" name='img2' src='électricité/2.jpg'>
        <img class="diapo" name='img3' src='électricité/3.jpg'>
        <img class="fleche" src="image/flecheDroite.jpg" onClick='precedent();'>
    </div>


<?php
    include 'partials/footer.php'; 
?>