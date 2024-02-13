<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Définir le dossier de destination pour les téléchargements
$uploads_directory = __DIR__ . '/images/uploads/';

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si un fichier a été téléchargé avec succès
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        // Récupérer le fichier téléchargé
        $uploaded_file = $_FILES['photo'];

        // Déplacer le fichier téléchargé vers le dossier "uploads"
        $destination = $uploads_directory . basename($uploaded_file['name']);
        move_uploaded_file($uploaded_file['tmp_name'], $destination);
    }
}

// Obtenir la liste des images disponibles dans le dossier "uploads"
$images_directory = './images/uploads/';
$images = scandir($images_directory);
// Supprimer les éléments '.' et '..' du tableau
$images = array_diff($images, array('..', '.'));

// Lancement du moteur Twig
echo $twig->render('contact.twig', [
    'titre' => 'Page contact',
    'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'data_form' => $_POST,
    'images' => $images, // Passer la liste des images disponibles au modèle Twig
]);

?>
