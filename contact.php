<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();


// UPLOAD IMAGE
// empty table, data form for twig 
$image_info = [
    'file_path' => '',
    'file_name' => '',
];

if (isset($_POST['submit'])) {
    $file = $_FILES['photo'];

    $fileName = $_FILES['photo']['name'];
    $fileTmpName = $_FILES['photo']['tmp_name'];
    $fileSize = $_FILES['photo']['size'];
    $fileError = $_FILES['photo']['error'];
    $fileType = $_FILES['photo']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                // $fileNameNew = uniqid('', true).".".$fileActualExt; // rename file
                $fileDestination = './images/uploads/'.$fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                // file table, data form for twig
                $image_info['file_path'] = './images/uploads/'.$fileName;
                $image_info['file_name'] = $fileName;
            } else {
                echo "Fichier trop gros !";
            }
        } else {
            echo "Problème lors de l'upload...";
        }
    } else {
        echo "Mauvais format d'image.";
    }
}

// Lancement du moteur Twig
echo $twig->render('contact.twig', [
	'title_page' => 'Contact',
    'titre' => 'Page contact',
    'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'data_form' => $_POST,
    'image_info' => $image_info,
]);


?>
