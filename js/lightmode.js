// LIGHTMODE/DARKMODE INFINITE SWITCHING ON A SAME PAGE
document.addEventListener('DOMContentLoaded', function () {
    // Récupérer le bouton et le lien du style
    const darkModeToggle = document.getElementById('websiteModeToggle');
    const styleLink = document.getElementById('style-wbesite-mode');
    const iconElement = darkModeToggle.querySelector('i');

    // Ajouter un écouteur d'événements pour le clic sur le bouton
    darkModeToggle.addEventListener('click', function () {
        // Vérifier si le mode sombre est déjà activé
        const isDarkMode = styleLink.href.endsWith('darkmode.css');

        // Changer le lien du style en fonction du mode actuel
        styleLink.href = isDarkMode ? 'css/lightmode.css' : 'css/darkmode.css';

        // Changer la classe de l'élément <i>
        iconElement.classList.toggle('bi-brightness-high', !isDarkMode);
        iconElement.classList.toggle('bi-moon', isDarkMode);
    });
});


// MODE SAVED IN THE LOCALSTORAGE WHEN WE GO ON ANOTHER PAGE
// document.addEventListener('DOMContentLoaded', function () {
//     // Récupérer le bouton, le lien du style et l'icône
//     let darkModeToggle = document.getElementById('websiteModeToggle');
//     let styleLink = document.getElementById('style-wbesite-mode');
//     let iconElement = darkModeToggle.querySelector('i');

//     // Vérifier si le mode sombre est déjà activé
//     let isDarkMode = localStorage.getItem('darkMode') === 'true';

//     // Initialiser le lien du style et l'icône en fonction du mode actuel
//     styleLink.href = isDarkMode ? 'css/darkmode.css' : 'css/lightmode.css';
//     iconElement.classList.toggle('bi-moon', !isDarkMode);
//     iconElement.classList.toggle('bi-brightness-high', isDarkMode);

//     // Ajouter un écouteur d'événements pour le clic sur le bouton
//     darkModeToggle.addEventListener('click', function () {
//         // Changer le lien du style en fonction du mode actuel
//         styleLink.href = isDarkMode ? 'css/lightmode.css' : 'css/darkmode.css';

//         // Changer la classe de l'élément <i>
//         iconElement.classList.toggle('bi-brightness-high', !isDarkMode);
//         iconElement.classList.toggle('bi-moon', isDarkMode);

//         // Mettre à jour le statut du mode sombre dans le localStorage
//         localStorage.setItem('darkMode', !isDarkMode);
//     });
// });
