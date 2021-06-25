<?php 
    $auth=0;
    include 'lib/includes.php';
    include 'partials/header.php'; 
?>


<body onload="init()">

    <section id="Wrapper" onload="init()">
        <div id="Slideshow">
            <div id="Slider">
                <img name="img1" src="img/1.jpg"/>
                <img name="img2" src="img/2.jpg"/>
                <img name="img3" src="img/3.jpg"/>
            </div>
            <div id="Arrows">
                <i id="Prev" class="fa fa-chevron-left fa-2x" aria-hidden="true" onClick='precedent()'></i>
                <i id="Next" class="fa fa-chevron-right fa-2x" aria-hidden="true" onClick='suivant()'></i>
            </div>
            
        </div>
    
    </section> <br>

    <h2 class="h2main">Mes différents domaines :</h2>

    <div class="logoglob">
        <form action="articles.php" method="post" id="formCategorie">
            <input type="text" name="nomCategorie" id="nomCategorie" value="" hidden="true">
            <img class="logoCategorie imgCategorie" src="img/logo1.jpg" value="ventilation"> <br><br><br>
            <img class="logoCategorie imgCategorie" src="img/logo2.jpg" value="electricite" > <br><br><br>
            <img class="logoCategorie imgCategorie" src="img/logo3.jpg" value="eau"         > <br><br><br>
            <img class="logoCategorie imgCategorie" src="img/logo4.jpg" value="chauffage"   >
        </form>
    </div>

    <script src='js/appIndex.js'></script>
    <script src="https://kit.fontawesome.com/7ccc695b8a.js" crossorigin="anonymous"></script>

<?php
    include 'partials/footer.php'; 
?>