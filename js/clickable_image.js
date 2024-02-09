function showImage(clickedPhoto) {
    var overlay = document.querySelector('.overlay');
    var imageOverlay = document.querySelector('.image-overlay');
    var photoUrl = clickedPhoto.src;
    
    overlay.style.cssText = 'display: block; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); z-index: 1000;';
    imageOverlay.style.cssText = 'display: block; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80%; height: 600px; background-size: cover; background-image: url(' + photoUrl + '); z-index: 1001;';
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