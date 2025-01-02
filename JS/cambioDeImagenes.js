function cambiar_imagen() {
    // Selecciona todas las imágenes dentro de .imagenes_personajes
    const imagenes = document.querySelectorAll(".imagenes_personajes img");

    imagenes.forEach(imagen => {
        imagen.addEventListener("click", () => {
            // Alterna la imagen entre las dos opciones
            if(imagen.src.includes("ellie1.png")||imagen.src.includes("ellie2.png")){//Para que no coja todas las imagenes
                if (imagen.src.includes("ellie1.png")) {
                    imagen.src = "/imagenes/ellie2.png"; // Cambia a la segunda imagen
                } else {
                    imagen.src = "/imagenes/ellie1.png"; // Cambia de vuelta a la primera imagen
                }
            }
            
        });
    });
}
