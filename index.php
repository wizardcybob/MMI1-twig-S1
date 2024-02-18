<?php
// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Chemin vers votre dossier d'images
$imageDirectory = './images/random/';

// Compter le nombre de fichiers dans le dossier
$totalImages = count(glob($imageDirectory . "*.{jpg,JPG,jpeg,JPEG,png,PNG,gif,GIF}", GLOB_BRACE));

// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
	echo $twig->render('accueil.twig', [
		'title_page' => 'Accueil',
		'total_images' => $totalImages, // Ajout de la variable total_images
	]);
	
?>
