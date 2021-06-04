<?php 
    $auth = 0;
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


<?php
    include 'partials/footer.php'; 
?>