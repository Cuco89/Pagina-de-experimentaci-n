<?php
session_start();

// Si el usuario no está logueado, redirigir al formulario de inicio de sesión
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone</title>
    <link rel="stylesheet" type="text/css" href="/CSS/style_index.css"/>
</head>
<body>

    <header class="navbar">
        <div class="logo"><img src="/imagenes/logo.png" alt=""></div>
        <nav class="menu">
            <a href="principal.php">Inicio</a>
            <a href="sobre_mi">Sobre mi</a>
            <a href="videojuegos.php">Videojuegos</a>
            <a href="menu_compra.php">Ir de compras</a>
            <a href ="menu_musica.html"> Musica </a>
            <a style="margin-left: 850px;" href="carrito.php">Carrito</a>
        </nav>
    </header>

    <div class="presentacion">
        
        <div class="resumen">
            <h1>¡Bienvenidos a GameZone!</h1>
            <p>En <strong>GameZone</strong>, somos apasionados de los videojuegos y queremos compartir esa pasión contigo. Somos un equipo de entusiastas que vive y respira el mundo gamer, siempre en busca de las mejores experiencias para nuestros clientes. Ya sea que busques los últimos lanzamientos, clásicos inolvidables, o accesorios para mejorar tu experiencia de juego, aquí encontrarás todo lo que necesitas.</p>
            <p>Nuestra misión es más que solo vender videojuegos: queremos construir una comunidad donde jugadores de todas las edades y niveles puedan encontrar su lugar. En <strong>GameZone</strong>, creemos que los videojuegos son mucho más que entretenimiento: son historias, desafíos, conexiones y, sobre todo, momentos que se quedan contigo para siempre.</p>
            <p>Explora nuestra tienda, descubre nuevas aventuras y, si tienes alguna duda o necesitas ayuda, ¡no dudes en contactarnos! Estamos aquí para hacer que tu experiencia gamer sea épica.</p>
            <p>Gracias por visitarnos, y recuerda: ¡el próximo nivel siempre está más cerca de lo que piensas!</p>
            <p>Ademas te ofrecemos una seccion de videojuegos donde escribiremos articulos con algunos de nuestros favoritos, esperamos que te guste</p>
            <hr>
            <div class="redesSociales">
                <h2>Nuestras redes sociales</h2>
                <a href="#facebook" target="_blank"><img src="/imagenes/facebook.png" alt="Facebook" title="Facebook"></a>
                <a href="#instagram" target="_blank"><img src="/imagenes/instagram.png" alt="Instagram" title="Instagram"></a>
                <a href="#twitter" target="_blank"><img src="/imagenes/twitter.png" alt="Twitter" title="Twitter"></a>
                <a href="#discord" target="_blank"><img src="/imagenes/discord.png" alt="Discord" title="Discord"></a>
                <a href="#github" target="_blank"><img src="/imagenes/github.png" alt="GitHub" title="GitHub"></a>
                
            </div>
        </div>
        <div class="imagenResumen">
            <img src="/imagenes/intro4.jpg" alt="Imagen Programador" title="Mariano Programando">
        </div>


    </div>
    <form method="POST" action="cerrar_sesion.php">
    <button type="submit">Cerrar sesión</button>
</form>
    
</body>
</html>