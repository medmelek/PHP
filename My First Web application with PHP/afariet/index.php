<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Afariet</title>
	<style>
		#backk{
			width:400px ;
			height: 70px ;
			margin-top: 20px;
			margin-left:32% ;
			background-color:#FFF8DC ;
			opacity: 0.6;
		}
		#search{
				margin-top: 12px ;
				margin-left :20px;
				width:350px;
				height: 30px;
				border-color:#DC143C ;
				border-width: 1px;
		}
		#btsearch{
				margin-top: 5px ;
				margin-left:160px ;
				font-size: 14px;
				border:none 0px; 
				background:none; 
				color :#DC143C;
		}
		#marquee{
			color :white;
			font-size: 18pt;
		}

		
		
	</style>
</head>
<body>
	<marquee id="marquee">مرحبا بيكم في افاريات تونسيا ،الدار داركم</marquee>
	<div id="backk">
	<form action="index.php"method="POST">
		<input id="search"type="text" name="search"placeholder="search" ></br>
		<input id="btsearch" type="submit"name="ok" value="search">
</form>	
</div>
</br>
<?php 
$connexion=new pdo('mysql:host=mysql16.000webhost.com;dbname=a3646541_message','a3646541_message','melekmelek');

 if ((isset($_POST['ok']))&&(strlen($_POST['search'])>0)){
$reponse = $connexion->query("SELECT * FROM vente where titre='".$_POST['search']."'");
echo '<ul class="cd-gallery">' ;
while ($donnees = $reponse->fetch())
{

echo '
		<li>
				<a href="www.semcours.herobo.com/info.php?id='.$donnees['id'].'">
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
				<b><a href="www.semcours.herobo.com/info.php?id='.$donnees['id'].'">'.$donnees['titre'].'</a></b>

				<em class="cd-price">DT26</em>
			</div> <!-- cd-item-info -->
		</li>' ;




}echo'</ul> ';

 }else{
 	$reponse = $connexion->query('SELECT * FROM vente');
echo '<ul class="cd-gallery">' ;
while ($donnees = $reponse->fetch())
{
//echo $donnees['Id'];
//echo $donnees['Nom'];
echo '
		<li>
				<a  href="http://www.semcours.herobo.com/info.php?id='.$donnees['id'].'">
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
				<b><a href="http://www.semcours.herobo.com/info.php?id='.$donnees['id'].'">'.$donnees['titre'].'</a></b>

				<em class="cd-price">DT26</em>
			</div> 
		</li>' ;




}echo'</ul> ';




 }


	?>	
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.min.js"></script>
<script src="js/main.js"></script> 

	
</body>
</html>