<?php 
    $auth = 0;
    include 'lib/includes.php';
    include 'partials/header.php';
?>
	

	<form action="" method="post" id="formCategorie">
		<input type="text" name="nomCategorie" id="nomCategorie" value="" hidden="true">
		<select name="nomCategorie" id="selectCategorie">
			<option name="ventillation" value="ventillation">ventilation</option>
			<option name="electricite" value="electricite">electricite</option>
			<option name="eau"value="eau">eau</option>
			<option name="chauffage"value="chauffage">chauffage</option>
		</select>
	</form>

<?php
	if(isset($_POST['nomCategorie'])){
		$nomCategorie = $_POST['nomCategorie'];
		$articles = $db->query("SELECT * FROM articles WHERE articles.categorie = '$nomCategorie'");
		var_dump($articles->fetchAll());
		foreach( $articles->fetchAll() as $article)
		{
			echo ("
				<div class='article'>
					<div class='img'>
					</div>
					<div class='descArticle'>
						<h2>$article[titre]</h2>
						<p>$article[contenue]</p>
					</div>
				</div>
			");
		}
	}
?>

	<script src='js/appIndex.js'></script>
	<script src="https://kit.fontawesome.com/7ccc695b8a.js" crossorigin="anonymous"></script>

<?php
    include 'partials/footer.php'; 
?>