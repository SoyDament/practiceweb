var menuButton = document.querySelector(".menu-button");
var menu = document.getElementById("menu");

function toggleMenu() {
    if (menu.style.left === "0px" || menu.style.left === "") {
        menu.style.left = "-300px";
        menuButton.style.display = "block"; // Muestra el icono del menú al cerrar el menú
    } else {
        menu.style.left = "0px";
        menuButton.style.display = "none"; // Oculta el icono del menú al abrir el menú
    }
}

function toggleUserMenu() {
    var userDropdown = document.getElementById("user-dropdown");
    if (userDropdown.style.display === "block") {
        userDropdown.style.display = "none";
    } else {
        userDropdown.style.display = "block";
    }
}

// Cerrar el menú cuando se hace clic fuera de él
document.addEventListener("click", function (event) {
    if (menu.style.left === "0px" && event.target !== menu && event.target !== menuButton && !menu.contains(event.target)) {
        menu.style.left = "-300px"; // Cierra el menú si se hace clic fuera de él
        menuButton.style.display = "block"; // Muestra el icono del menú al cerrar el menú
    }
});


function toggleUserMenu() {
    var userDropdown = document.getElementById("user-dropdown");
    if (userDropdown.style.display === "block") {
        userDropdown.style.display = "none";
    } else {
        userDropdown.style.display = "block";
    }
}
