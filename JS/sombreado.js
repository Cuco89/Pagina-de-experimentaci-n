function sombreadoJuego() {
    // Obtiene todos los elementos con la clase "videojuego"
    const videojuegos = document.querySelectorAll(".videojuego");

    videojuegos.forEach(juego => {
        // Agrega un event listener para cuando el mouse esté sobre el elemento
        juego.addEventListener("mouseover", () => {
            juego.style.boxShadow = "0 6px 10px rgb(219, 194, 147)"; // Cambia el sombreado
        });

        // Agrega un event listener para cuando el mouse salga del elemento
        juego.addEventListener("mouseout", () => {
            juego.style.boxShadow = ""; // Restaura el sombreado al original
        });
    });
}
