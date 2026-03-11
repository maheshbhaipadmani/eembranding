window.addEventListener("load", function () {

    const preloader = document.getElementById("preloader");

    preloader.style.transition = "opacity 0.3s ease";
    preloader.style.opacity = "0";

    setTimeout(function () {
        preloader.style.display = "none";
    }, 300);

});