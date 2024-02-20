document.addEventListener("DOMContentLoaded", function() {
    var header = document.querySelector("header");

    window.addEventListener("scroll", function() {
        if (window.scrollY > 100) {
            header.classList.add("header_fixed");
        } else {
            header.classList.remove("header_fixed");
        }
    });
});