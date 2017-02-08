<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Afariet</title>
	<style>
			.cd-gallery{
				height: 400px ;
			}
	</style>
	</head>
	<body>
<?php
$connexion=new pdo('mysql:host=mysql16.000webhost.com;dbname=a3646541_message','a3646541_message','melekmelek');
$_GET['id'];
$reponse = $connexion->query("SELECT * FROM vente where id=".$_GET['id']."");
echo '<ul class="cd-gallery">' ;
while ($donnees = $reponse->fetch())
{

echo '<li>
				<a   href="http://www.semcours.herobo.com/info.php?id='.$donnees['id'].'">
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

echo '<li>

			<div class="cd-item-info">
				<b>en solde ? '.$donnees['solde'].'</b></br>
				<b>Made in ? '.$donnees['made'].'</b></br>
				<b> Tissus ? '.$donnees['tissus'].'</b></br>
				<b> Prix ? '.$donnees['prix'].' DT</b></br>
			</div> 


</li>' ;

			
}

echo '</ul>';
?>


<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.min.js"></script>
<script src="js/main.js"></script> 
</body>
</html>