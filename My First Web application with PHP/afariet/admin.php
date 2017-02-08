<html>
<head>
		<title>Afariet</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
		<script src="js/modernizr.js"></script> <!-- Modernizr -->
		<style>
			.cd-gallery{
				height: 390px ;
			}
			#dx,#ins{
				width:180px;
				margin-top: 15px;
				margin-left: 20px ;
				height:50px;
				background-color :#FFA07A;
				color :white;
				border:none 0px;
				border-radius: 5px 20px 5px;
				font-size: 18pt;
			}

			</style>
	</head>
<body>
	<?php
	echo'
	<form method="POST"action="admin.php">
			<input id="dx"type="submit" value="deconnexion"name="ok">
			<input id="ins"type="submit" value="inserer"name="insert">
	</form>';
	
	session_start();
	if ($_SESSION["admin"]=="true"){

		if(isset($_POST['insert'])){
			header('Location: http://www.semcours.herobo.com/insert.php');
		}

		if(isset($_POST['ok'])){
			session_destroy();
			header('Location: http://www.semcours.herobo.com/login.php');
		}
		
		if($_SESSION["admin"]=="true"){
//-----------------------------------------------
	$connexion=new pdo('mysql:host=mysql16.000webhost.com;dbname=a3646541_message','a3646541_message','melekmelek');
	$reponse = $connexion->query("SELECT * FROM vente ");
	echo '<ul class="cd-gallery">' ;
while ($donnees = $reponse->fetch())
{

echo '
		<li>
				<a href="http://www.semcours.herobo.com/superadmin.php?id='.$donnees['id'].'">
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
				<b><a href="http://www.semcours.herobo.com/superadmin.php?id='.$donnees['id'].'">'.$donnees['titre'].'</a></b>

				<em class="cd-price">DT26</em>
			</div> 
		</li>' ;
}echo'</ul> ';

//-----------------------------------------------
		}else{
			header('Location:http://www.semcours.herobo.com/login.php');
		}
		}
	?>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/jquery.mobile.min.js"></script>
	<script src="js/main.js"></script> 
	</body>
	</html>
