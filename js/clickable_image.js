function showImage(clickedPhoto) {
    var overlay = document.querySelector('.overlay');
    var imageOverlay = document.querySelector('.image-overlay');
    var photoUrl = clickedPhoto.src;

    // Obtenez la largeur et la hauteur de l'écran
    var screenWidth = window.innerWidth;
    var screenHeight = window.innerHeight;

    // Calculer la largeur et la hauteur maximales pour l'image
    var maxImageWidth = screenWidth * 0.3;
    var maxImageHeight = screenHeight * 0.3;

    // Modifier les styles de l'image pour les adapter à l'écran
    overlay.style.cssText = 'display: block; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); z-index: 1000;';
    imageOverlay.style.cssText = 'display: flex; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: ' + maxImageWidth + 'px; max-height: ' + maxImageHeight + 'px; z-index: 1001;';

    // Afficher l'image dans l'élément image-overlay
    imageOverlay.innerHTML = '<img src="' + photoUrl + '" style="width: 100%; height: 100%;" alt="">';
}


function hideImage() {
    var overlay = document.querySelector('.overlay');
    var imageOverlay = document.querySelector('.image-overlay');
    
    overlay.style.display = 'none';
    imageOverlay.style.display = 'none';
}

document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        hideImage();
    }
});