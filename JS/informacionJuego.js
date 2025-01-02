function informacionJuego() {
    const informaciones = document.querySelectorAll(".informacion"); // Selecciona todos los elementos .informacion

    informaciones.forEach(informacion => {
        informacion.addEventListener("click", () => {
            // Encuentra el siguiente hermano (sibling) de tipo .datos
            const datos = informacion.nextElementSibling;

            // Alterna la visibilidad del div .datos correspondiente
            if (datos.style.display === "none" || datos.style.display === "") {
                datos.style.display = "block"; // Muestra el contenido
            } else {
                datos.style.display = "none"; // Oculta el contenido
            }
        });
    });
}