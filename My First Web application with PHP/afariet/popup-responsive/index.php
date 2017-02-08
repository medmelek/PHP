<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<!-- fichier importe ! -->
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery-1.11.1.min.js"></script>

		<script src="js/popup.js"></script>

		<!-- Pour l'effet blur -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>

		<!-- fichier importe ! -->
  	
	<title>Afariet</title>
</head>
<body>
	jjjjjjjj

		<!-- LE CONTENU DE LA POPUP -->

		<div class="modal blur-effect" id="popup">
			<div class="popup-content">
				<h3>Inscription News</h3>
				<div>
					<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<input type="text" placeholder="Adresse email" />
					<input type="submit" class="submit" value="je m'inscris" />
					
					<div class="close"></div>
				</div>
			</div>
		</div>

		<!-- FIN DE LA POPUP -->
		
		<!-- CONTENU DE LA PAGE -->

		<div class="container">

			<div class="content">

				<a href="#" class="logo"><img src="img/logo.png"></a>

				<h1>A propos de la newsletter</h1>
				<p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				
				<button class="popup-button" data-modal="popup">Je m'inscris !</button>

				<img src="img/mac.jpg" alt="yosemite webdesignweb">

			</div><!-- .content -->
				
		</div><!-- .container -->


</br>
<?php 
$connexion=new pdo('mysql:host=127.0.0.1;dbname=afariet','root','');
$reponse = $connexion->query('SELECT * FROM vente');
echo '<ul class="cd-gallery">' ;
while ($donnees = $reponse->fetch())
{
//echo $donnees['Id'];
//echo $donnees['Nom'];
echo '
		<li>
				<a href="#">
				<ul class="cd-item-wrapper">
					<li class="selected">
						<img src="img/'.$donnees['model1'].'" alt="Preview image">
					</li>

					<li class="move-right" data-sale="true" data-price="DT'.$donnees['prix'].'">
						<img src="img/'.$donnees['model2'].'" alt="Preview image">
					</li>

					<li>
						<img src="img/'.$donnees['model3'].'" alt="Preview image">
					</li>
				</ul> 
			
					</a>
			<div class="cd-item-info">
				<b><a href="#0">'.$donnees['titre'].'</a></b>

				<em class="cd-price">DT26</em>
			</div> <!-- cd-item-info -->
		</li>' ;




}echo'</ul> ';



	?>
	
		

		
	
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.min.js"></script>
<script src="js/main.js"></script> 

	
</body>
</html>