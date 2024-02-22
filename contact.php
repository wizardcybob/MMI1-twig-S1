<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();


// UPLOAD IMAGE
// Initialize form data array
$form_data = [];

// Initialize image info array
$image_info = [
    'file_path' => '',
    'file_name' => '',
];

// Initialize messages array
$messages = [];

// Load existing data from file
$file_path = './form_data.txt';
$existing_data = file_get_contents($file_path);

// Decode existing data into an associative array
$existing_data_array = json_decode($existing_data, true);

// If existing data is not an array, initialize it as an empty array
if (!is_array($existing_data_array)) {
    $existing_data_array = [];
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    // Check if the keys exist in $_POST
    $form_data['firstname'] = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $form_data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $form_data['mail'] = isset($_POST['mail']) ? $_POST['mail'] : '';
    $form_data['description'] = isset($_POST['description']) ? $_POST['description'] : '';
    $form_data['photo'] = isset($_POST['photo']) ? $_POST['photo'] : '';

    // Add the new form data to the existing array
    $existing_data_array[] = $form_data;

    // Encode the updated array into JSON format
    $file_content = json_encode($existing_data_array, JSON_PRETTY_PRINT);

    // Process image upload
    $file = $_FILES['photo'];
    $fileName = $_FILES['photo']['name'];
    $fileTmpName = $_FILES['photo']['tmp_name'];
    $fileSize = $_FILES['photo']['size'];
    $fileError = $_FILES['photo']['error'];
    $fileType = $_FILES['photo']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');
    
    // indicate file size
    $maxFileSize = 150 * 1024; // 150 ko
    $maxImageWidth = 960; // 960px max-width

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < $maxFileSize) {
                list($width, $height) = getimagesize($fileTmpName);
                if ($width <= $maxImageWidth) {
                    $fileDestination = './images/uploads/' . $fileName;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    // Update image info
                    $image_info['file_path'] = './images/uploads/' . $fileName;
                    $image_info['file_name'] = $fileName;
                } else {
                    $messages[] = "L'image est trop large. La largeur maximale autorisée est de {$maxImageWidth} pixels.";
                }
            } else {
                $messages[] = "L'image est trop lourde ! La taille maximale autorisée est de 150 ko.";
            }
        } else {
            $messages[] = "L'image est trop lourde ! La taille maximale autorisée est de 150 ko. La largeur maximale autorisée est de 960px.";
        }
    } else {
        $messages[] = "Mauvais format d'image. Les formats autorisés sont : " . implode(', ', $allowed);
    }

    // Write the data to the file
    if (file_put_contents($file_path, $file_content) !== false && !empty($image_info['file_path'])) {
        $messages[] = 'Données du formulaire et image sauvegardées avec succès.';
    } elseif (file_put_contents($file_path, $file_content) !== false) {
        $messages[] = 'Données du formulaire sauvegardées avec succès, mais aucune image n\'a été téléchargée.';
    } else {
        $messages[] = 'Erreur lors de la sauvegarde des données du formulaire.';
    }
}

// Lancement du moteur Twig
echo $twig->render('contact.twig', [
    'title_page' => 'Contact',
    'titre' => 'Page contact',
    'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'data_form' => $_POST,
    'image_info' => $image_info,
    'messages' => $messages,
]);

?>
