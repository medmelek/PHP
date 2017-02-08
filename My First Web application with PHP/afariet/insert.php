<html>
<head>
	<title>Afariet</title>
	<link rel="stylesheet" href="css/reset.css"> 
	<link rel="stylesheet" href="css/style.css">
	<style>
	.cd-gallery{
			margin-left: 35%;
			height: 1150px;
		}
	.cd-item-info{
			height:1150px;
			padding-left: 180px;
	}
	#btinsert{
			
			width:180px;
			margin-top:60px;
			height:70px;
			background-color :#FFB6C1;
			color :white;
			border:none 0px;
			border-radius: 5px 20px 5px;
			font-size: 23pt;
	}

	</style> 
</head>
<body>
	<?php
	if ($_SESSION["admin"]=="true"){

if (isset($_POST['ok'])){
$connexion=new pdo('mysql:host=mysql16.000webhost.com;dbname=a3646541_message','a3646541_message','melekmelek');
$connexion->exec("INSERT INTO vente (titre,prix,made,tissus,solde,model1,model2,model3) VALUES 
('".$_POST['titre']."',".$_POST['prix'].",'".$_POST['made']."','".$_POST['tissus']."','
	".$_POST['solde']."','".$_POST['model1']."','".$_POST['model2']."','".$_POST['model3']."')");
header('Location: http://www.semcours.herobo.com/admin.php');
}

}
	?>
	<ul class="cd-gallery">
		<li>
	<div class="cd-item-info">
		<form method="POST" action="insert.php">
				<b>titre </b></br>
				<input type="text" name="titre" required></br>

				<b>prix </b></br>
				<input type="text" name="prix"required ></br>

				<b>en Sold ?</b></br>
				<input type="text" name="solde"required ></br>

				<b> made </b></br>
				<input type="text" name="made" ></br>

				<b>tissus </b></br>
					<input type="text" name="tissus" ></br>

				<b>Model1 </b></br>
					<input type="text" name="model1"required ></br>

				<b>Model2 </b></br>
				<input type="text" name="model2" required></br>

				<b>Model3 </b></br>
				<input type="text" name="model3" required></br>
					


				<input id="btinsert"type="submit" name="ok"value="insert" ></br>

			</form>
	</div> 
</li></ul>
</body>
</html>