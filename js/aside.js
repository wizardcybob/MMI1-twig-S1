document.addEventListener("DOMContentLoaded", function() {
    var asideElement = document.querySelector('aside');
    var fixed_asideElement = document.querySelector('.fixed_aside');

    window.addEventListener('scroll', function() {
      var scrollPosition = document.documentElement.scrollTop;

      // Ajustez la valeur de 200 selon la position à partir de laquelle la div doit être en position fixe
      if (scrollPosition > 205) {
        fixed_asideElement.style.top = '20px';
      } else {
        fixed_asideElement.style.top = '205px'; // Ajustez selon vos besoins
      }
    });
});