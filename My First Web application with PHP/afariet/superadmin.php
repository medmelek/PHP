<html>
</html>
<head>
	<title>Afariet</title>
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
		<script src="js/modernizr.js"></script> <!-- Modernizr -->
		<style>
			.cd-gallery{
				height: 390px ;
			}
				#hi{
					height: 790px;
				}
				#dx,#ins{
				width:180px;
				margin-top: 15px;
				margin-left: 20px ;
				height:50px;
				background-color :#DEB887;
				color :white;
				border:none 0px;
				border-radius: 5px 20px 5px;
				font-size: 18pt;
			}
			</style>
</head>
<body>

	<?php
	if ($_SESSION["admin"]=="true"){
$connexion=new pdo('mysql:host=mysql16.000webhost.com;dbname=a3646541_message','a3646541_message','melekmelek');
session_start();

//---
if (isset($_POST['modifier'])){
$connexion->exec("UPDATE vente SET titre='".$_POST['titre']."' 
prix=".$_POST['prix']."
made='".$_POST['made']."'
solde='".$_POST['solde']."'
tissus='".$_POST['tissus']."' where id =".$_SESSION["id"]."");
header('Location: http://www.semcours.herobo.com/admin.php');
//---
}else{
	if (isset($_POST['delete'])){
		$connexion->exec("DELETE FROM vente WHERE id=".$_SESSION["id"]."");
		header('Location: http://www.semcours.herobo.com/admin.php');
	}else{
$_GET['id'];

$_SESSION["id"] =$_GET['id'];
$reponse = $connexion->query("SELECT * FROM vente where id=".$_GET['id']."");
echo '<ul class="cd-gallery">' ;
while ($donnees = $reponse->fetch())
{

echo '<li>
				<a   href="#">
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
				<b><a href="#">'.$donnees['titre'].'</a></b>

				<em class="cd-price">DT26</em>
			</div>
		</li>' ;

echo '<li>
			
			<div class="cd-item-info" id="hi">
			<form method="POST"action="superadmin.php">
				<b>Titre  ? '.$donnees['titre'].'</b></br>
				<input type="text"name="titre"value='.$donnees['titre'].'></br>
				<b>Made in ? '.$donnees['made'].'</b></br>
				<input type="text"name="made"value='.$donnees['made'].'></br>
				<b> Tissus ? '.$donnees['tissus'].'</b></br>
				<input type="text"name="tissus"value='.$donnees['tissus'].'></br>
				<b> Prix ? '.$donnees['prix'].' DT</b></br>
				<input type="text"name="prix" value='.$donnees['prix'].'></br>
				<b> en Solde ? '.$donnees['solde'].' DT</b></br>
				<input type="text"name="solde"value='.$donnees['solde'].'></br></br>
				<input id="dx"type="submit" value="modifier"name="modifier">
				<input id="ins"type="submit" value="delete"name="delete"></br>

				</form >
			</div> 


</li>' ;

			
}

echo '</ul>';

}
}
}
?>


	</body>
	</html>