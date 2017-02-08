<html>
<head>
	<title>Afariet</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
			#backk{
				width:800px ;
				height: 200px ;
				margin-top: 15%;
				margin-left:23% ;
				background:#FFF8DC 0.5pt;
				opacity: 0.6;
			}
			#login{
				margin-top: 47px ;
				margin-left:220px ;
				border-color: #DC143C ;
				width:350px;
				height: 30px;
				opacity: 1;
			}
			
			#dx,#ins{
				width:180px;
				margin-top: 15px;
				margin-left: 620px ;
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
	session_start();
		if (isset($_POST['ok'])){

			if (($_POST['login']=='sem')&&($_POST['password']=='sem')){
					
					$_SESSION["admin"] = "true";
					header('Location: http://www.semcours.herobo.com/admin.php');

			}else{
					$_SESSION["admin"] = "false";
					$test=0;
			}


		}

	?>

	<div id="backk">
		<form method="POST"action="login.php">
			<input id="login"type="text" name="login"placeholder="login?"></br>
			<input id="login"type="password"name="password"placeholder="password?"></br>
			</div>
			<input id="dx" type="submit" name="ok"value="Valider !"></br>
		</form>
	
</br>
<div id="failer">
		<?php
			if (isset($_POST['ok'])){
				if ($test==0){
					
					echo "<img src='erreur.jpg' width='1000' height='350'/>";
				}
				
			}
		?>
</div>



</body>
</html>