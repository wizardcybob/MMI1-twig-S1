<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Réception de données de formulaires</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>
	<!-- Pour un affichage des données du fomulaire SIMPLE en se servant du fichier reception.php vu en cours -->
	<p>Pour un affichage des données du fomulaire SIMPLE en se servant du fichier reception.php vu en cours</p>
	
	<!-- METHODE POST -->
	<div>
		<div>Variables reçues par la méthode POST :</div>
		<?php
			foreach ($_POST as $key => $value) {
				print("<div>$key</div>");
				print("<div>$value</div>");
			}
		?>
	</div>
	<!-- METHODE GET -->
	<div>
		<div>Variables reçues par la méthode GET :</div>
		<?php
			foreach ($_GET as $key => $value) {
				print("<div>$key</div>");
				print("<div>$value</div>");
			}
		?>
	</div>
</body>

</html>