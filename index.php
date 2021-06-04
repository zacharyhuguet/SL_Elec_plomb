<?php 
$auth=0;
    include 'lib/includes.php';
    include 'partials/header.php'; 
?>
<link rel="stylesheet" href="css/style.css">

<script src='js/diapo.js'></script>
<script src="https://kit.fontawesome.com/7ccc695b8a.js" crossorigin="anonymous"></script>

<body onload="init()">





    
<section id="Wrapper">
	<div id="Slideshow">
		<div id="Slider">
			<img name="img1" src="1.jpg"/>
			<img name="img2" src="2.jpg"/>
			<img name="img3" src="3.jpg"/>
		</div>
		<div id="Arrows">
			<i id="Prev" class="fa fa-chevron-left fa-2x" aria-hidden="true" onClick='precedent()'></i>
			<i id="Next" class="fa fa-chevron-right fa-2x" aria-hidden="true" onClick='suivant()'></i>
		</div>
		
	</div>
</section>
    <div class="logoglob">

        <a href="ventilation.php">
            <img class="logo1" src="image/logo1.jpg">   </a><br><br><br>
    <!-- <div class="logoglob2"> -->
        <a href="électricité.php">
            <img class="logo2" src="image/logo2.jpg">  </a><br><br><br>
            
        <a href="eau.php">
            <img class="logo3" src="image/logo3.jpg">   </a><br><br><br>
    <!-- </div> -->
        <a href="chauffage.php">
            <img class="logo4" src="image/logo4.jpg">   </a>
        
    </div>


<?php
    include 'partials/footer.php'; 
?>