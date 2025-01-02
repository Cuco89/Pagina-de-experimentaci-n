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
    <title>Videojuegos Favoritos</title>
    
    <link rel="stylesheet" type="text/css" href="/CSS/style_videogames.css"/>
</head>
<body onload="sombreadoJuego();informacionJuego()">
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

    <div class="entradaVideojuegos">
        <h1>Mis videojuegos favoritos</h1>
        <p>Aquí tienes una lista de mis videojuegos favoritos. Si te interesa, puedes hacer clic en el enlace para obtener más información sobre ellos.</p>
        <p>Haz clic en <strong>"Información"</strong> para ver detalles esenciales de cada juego.</p>
        <p>Si haces clic en la <strong>imagen</strong>, serás redirigido a una página dedicada exclusivamente a ese juego.</p>

    </div>
    <hr>
    <div class="imagenMario">
        <img src="/imagenes/mario.png" alt="imagenMario" title="Imagen de Super Mario">
        
    </div>

    <div class="box-container">
        <div class="videojuegos" id="videojuegos">
            <div class="videojuego" id="videojuego1">
                <a href="/HTML/info_TheLastOfUS.html">
                    <img src="/imagenes/thelastofusP.png" alt="The last of us" title="The last of us">
                </a>
                
                <div class="informacionVideojuego">
                    <h3>The last of us</h3>
                    <h4 class="informacion">Informacion</h4>
                    <div class="datos" style="display: none;">
                        <ul>
                            <li><span>Desarrolladora: </span>Naughty Dog</li>
                            <li><span>Genero: </span>Terror</li>
                            <li><span>Año de lanzamiento: </span>2012</li>
                            <li><span>Precio: </span>40 euros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="videojuego" id="videojuego2">
                <img src="/imagenes/zelda.png" alt="Zelda" title="Zelda">
                <div class="informacionVideojuego">
                    <h3>Zelda</h3>
                    <h4 class="informacion">Informacion</h4>
                    <div class="datos" style="display:none;">
                        <ul>
                            <li><span>Desarrolladora: </span>Nintendo</li>
                            <li><span>Genero: </span>Aventuras</li>
                            <li><span>Anio de lanzamiento: </span> 1998</li>
                            <li><span>Precio: </span>40 euros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="videojuego" id="videojuego3">
                <img src="/imagenes/crash.png" alt="Crash Bandicoot" title="Crash Bandicoot">
                <div class="informacionVideojuego">
                    <h3>Crash Bandicoot</h3>
                    <h4 class="informacion">Informacion</h4>
                    <div class="datos" style="display: none;">
                        <ul>
                            <li><span>Desarrolladora: </span>Naughty Dog</li>
                            <li><span>Genero: </span>Aventuras</li>
                            <li><span>Anio de lanzamiento: </span> 1996</li>
                            <li><span>Precio: </span>25 euros</li>
                        </ul>

                    </div>
                    
                </div>
            </div>
            <div class="videojuego" id="videojuego4">
                <img src="/imagenes/pokemon.png" alt="Pokemon" title="Pokemon">
                <div class="informacionVideojuego">
                    <h3>Pokemon</h3>
                    <h4 class="informacion">Informacion</h4>
                    <div class="datos" style="display: none;">
                        <ul>
                            <li><span>Desarrolladora: </span>Nintendo</li>
                            <li><span>Genero: </span>Aventuras</li>
                            <li><span>Anio de lanzamiento: </span> 1996</li>
                            <li><span>Precio: </span>45 euros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="videojuego" id="videojuego5">
                <img src="/imagenes/uncharted.png" alt="uncharted" title="uncharted">
                <div class="informacionVideojuego">
                    <h3>Uncharted</h3>
                    <h4 class="informacion">Informacion</h4>
                    <div class="datos" style="display: none;">
                        <ul>
                            <li><span>Desarrolladora: </span>Naughty Dog</li>
                            <li><span>Genero: </span>Aventuras</li>
                            <li><span>Anio de lanzamiento: </span> 2007</li>
                            <li><span>Precio: </span>55 euros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="videojuego" id="videojuego6">
                <img src="/imagenes/daysgone.png" alt="Days Gone" title="Days Gone">
                <div class="informacionVideojuego">
                    <h3>Days Gone</h3>
                    <h4 class="informacion">Informacion</h4>
                    <div class="datos" style="display: none;">
                        <ul>
                            <li><span>Desarrolladora: </span>Bend Studio</li>
                            <li><span>Genero: </span>Terror</li>
                            <li><span>Anio de lanzamiento: </span> 2021</li>
                            <li><span>Precio: </span>35 euros</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="videojuego" id="videojuego7">
                <img src="/imagenes/hollowknight.png" alt="Hollow Knight" title="Hollow Knight">
                <div class="informacionVideojuego">
                    <h3>Hollow Knight</h3>
                    <h4 class="informacion">Informacion</h4>
                    <div class="datos" style="display: none;">
                        <ul>
                            <li><span>Desarrolladora: </span>Team Cherry</li>
                            <li><span>Genero: </span>Aventuras</li>
                            <li><span>Anio de lanzamiento: </span> 2017</li>
                            <li><span>Precio: </span>20 euros</li>
                        </ul>
                    </div>
                
                </div>
            </div>
            <div class="videojuego" id="videojuego8">
                <img src="/imagenes/harryPotter.png" alt="Hogwarts Legacy" title="Hogwarts Legacy">
                <div class="informacionVideojuego">
                    <h3>Hogwarts Legacy</h3>
                    <h4 class="informacion">Informacion</h4>
                    <div class="datos" style="display: none;">
                        <ul>
                            <li><span>Desarrolladora: </span>Avalanche Software</li>
                            <li><span>Genero: </span>Aventuras</li>
                            <li><span>Anio de lanzamiento: </span> 2023</li>
                            <li><span>Precio: </span>40 euros</li>
                        </ul>

                    </div>
                   
                </div>
            </div>
        </div>

    </div>
    
    <script src="/JS/sombreado.js"></script>
    <script src="/JS/informacionJuego.js"></script>
</body>
</html>