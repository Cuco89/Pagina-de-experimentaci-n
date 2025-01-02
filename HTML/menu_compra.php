<?php
// Iniciar sesión
session_start();

// Si el usuario no está logueado, redirigir al formulario de inicio de sesión
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

 // Si el carrito ya existe, simplemente agregamos el nuevo producto al carrito
 if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();  // Si no existe, lo inicializamos como un array vacío
}


// Verificar si se envían datos del formulario
if (isset($_POST['producto']) && isset($_POST['precio'])) {
    // Crear el producto como un array asociativo
    $producto = [
        'nombre' => htmlspecialchars($_POST['producto'], ENT_QUOTES, 'UTF-8'),
        'precio' => floatval($_POST['precio'])
    ];
    // Agregar el producto al carrito
    array_push($_SESSION['carrito'],$producto);
    echo "<script>sessionStorage.setItem('carrito', JSON.stringify(" . json_encode($_SESSION['carrito']) . "));</script>"; // Guardar el carrito en sessionStorage

    // Redirigir al usuario a otra página (esto evita el reenvío del formulario al recargar)
    header('Location: carrito.php');  // O cualquier otra página que quieras redirigir
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de compra</title>
    <link rel="stylesheet" type="text/css" href="/CSS/style_menu_compra.css">
</head>
<body onload="informacionJuego()">

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

<div class="titulo_compras">
    <h1>Galería con todos nuestros títulos</h1>
    <hr>
</div>

<div class="container_games">
    <!-- Videojuego 1 -->
    <div class="video_game">
        <img src="/imagenes/imagenes_compra/the_last_of_us.jpg" alt="The Last of Us" title="The Last of Us">
        <div class="info_game">
            <h3>The Last of Us</h3>
            <h4 class="informacion">Información</h4>
            <div class="datos" style="display: none;">
                <ul>
                    <li><span>Desarrolladora:</span> Naughty Dog</li>
                    <li><span>Género:</span> Terror</li>
                    <li><span>Año de lanzamiento:</span> 2013</li>
                    <li><span>Precio:</span> 40 euros</li>
                </ul>
            </div>
            <div class="add_carrito">
                <form method="POST" action="menu_compra.php">
                    <input type="hidden" name ="producto" value="The last of us">
                    <input type="hidden" name="precio" value="40">
                    <button type="submit">Add al carrito</button>
                </form>
                
            </div>
        </div>
    </div>

    <!-- Videojuego 2 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/the_last_of_us2.jpeg" alt="The Last of Us II" title="The Last of Us II">
    <div class="info_game">
        <h3>The Last of Us II</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Naughty Dog</li>
                <li><span>Género:</span> Terror</li>
                <li><span>Año de lanzamiento:</span> 2020</li>
                <li><span>Precio:</span> 60 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="The Last of Us II">
                <input type="hidden" name="precio" value="60">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 3 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/days_gone.jpeg" alt="Days Gone" title="Days Gone">
    <div class="info_game">
        <h3>Days Gone</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> SIE Bend Studio</li>
                <li><span>Género:</span> Mundo Abierto</li>
                <li><span>Año de lanzamiento:</span> 2019</li>
                <li><span>Precio:</span> 30 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Days Gone">
                <input type="hidden" name="precio" value="30">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 4 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/lord_of_the_fallen.jpeg" alt="The Lord of the Fallen" title="The Lord of the Fallen">
    <div class="info_game">
        <h3>The Lord of the Fallen</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> HEXWORKS</li>
                <li><span>Género:</span> Rol</li>
                <li><span>Año de lanzamiento:</span> 2023</li>
                <li><span>Precio:</span> 55 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="The Lord of the Fallen">
                <input type="hidden" name="precio" value="55">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
        </div>

    </div>

    <!-- Videojuego 5 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/elden_ring.jpeg" alt="Elden Ring" title="Elden Ring">
    <div class="info_game">
        <h3>Elden Ring</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> FromSoftware</li>
                <li><span>Género:</span> Acción/RPG</li>
                <li><span>Año de lanzamiento:</span> 2022</li>
                <li><span>Precio:</span> 70 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Elden Ring">
                <input type="hidden" name="precio" value="70">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 6 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/horizon.jpeg" alt="Horizon Zero Dawn" title="Horizon Zero Dawn">
    <div class="info_game">
        <h3>Horizon Zero Dawn</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Guerrilla Games</li>
                <li><span>Género:</span> Mundo Abierto</li>
                <li><span>Año de lanzamiento:</span> 2017</li>
                <li><span>Precio:</span> 50 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Horizon Zero Dawn">
                <input type="hidden" name="precio" value="50">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 7 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/uncharted.jpeg" alt="Uncharted 4" title="Uncharted 4">
    <div class="info_game">
        <h3>Uncharted 4</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Naughty Dog</li>
                <li><span>Género:</span> Acción/Aventura</li>
                <li><span>Año de lanzamiento:</span> 2016</li>
                <li><span>Precio:</span> 30 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Uncharted 4">
                <input type="hidden" name="precio" value="30">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 8 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/god_of_war.jpeg" alt="God of War" title="God of War">
    <div class="info_game">
        <h3>God of War</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Santa Monica Studio</li>
                <li><span>Género:</span> Acción/Aventura</li>
                <li><span>Año de lanzamiento:</span> 2018</li>
                <li><span>Precio:</span> 60 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="God of War">
                <input type="hidden" name="precio" value="60">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 9 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/ghost_of_tsushima.jpeg" alt="Ghost of Tsushima" title="Ghost of Tsushima">
    <div class="info_game">
        <h3>Ghost of Tsushima</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Sucker Punch Productions</li>
                <li><span>Género:</span> Acción/Aventura</li>
                <li><span>Año de lanzamiento:</span> 2020</li>
                <li><span>Precio:</span> 50 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Ghost of Tsushima">
                <input type="hidden" name="precio" value="50">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 10 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/cyberpunk.jpeg" alt="Cyberpunk 2077" title="Cyberpunk 2077">
    <div class="info_game">
        <h3>Cyberpunk 2077</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> CD Projekt Red</li>
                <li><span>Género:</span> Mundo Abierto</li>
                <li><span>Año de lanzamiento:</span> 2020</li>
                <li><span>Precio:</span> 60 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Cyberpunk 2077">
                <input type="hidden" name="precio" value="60">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 11 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/redDead.jpg" alt="Red Dead Redemption 2" title="Red Dead Redemption 2">
    <div class="info_game">
        <h3>Red Dead Redemption 2</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Rockstar Games</li>
                <li><span>Género:</span> Mundo Abierto</li>
                <li><span>Año de lanzamiento:</span> 2018</li>
                <li><span>Precio:</span> 50 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Red Dead Redemption 2">
                <input type="hidden" name="precio" value="50">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 12 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/the_witcher.jpg" alt="The Witcher 3" title="The Witcher 3">
    <div class="info_game">
        <h3>The Witcher 3</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> CD Projekt Red</li>
                <li><span>Género:</span> Rol</li>
                <li><span>Año de lanzamiento:</span> 2015</li>
                <li><span>Precio:</span> 40 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="The Witcher 3">
                <input type="hidden" name="precio" value="40">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 13 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/assasynsCreed.jpg" alt="Assassin's Creed Valhalla" title="Assassin's Creed Valhalla">
    <div class="info_game">
        <h3>Assassin's Creed Valhalla</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Ubisoft</li>
                <li><span>Género:</span> Mundo Abierto</li>
                <li><span>Año de lanzamiento:</span> 2020</li>
                <li><span>Precio:</span> 60 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Assassin's Creed Valhalla">
                <input type="hidden" name="precio" value="60">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 14 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/spyderman.jpg" alt="Spider-Man" title="Spider-Man">
    <div class="info_game">
        <h3>Spider-Man</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Insomniac Games</li>
                <li><span>Género:</span> Acción/Aventura</li>
                <li><span>Año de lanzamiento:</span> 2018</li>
                <li><span>Precio:</span> 40 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Spider-Man">
                <input type="hidden" name="precio" value="40">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 15 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/deadStra.jpg" alt="Death Stranding" title="Death Stranding">
    <div class="info_game">
        <h3>Death Stranding</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Kojima Productions</li>
                <li><span>Género:</span> Aventura</li>
                <li><span>Año de lanzamiento:</span> 2019</li>
                <li><span>Precio:</span> 50 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Death Stranding">
                <input type="hidden" name="precio" value="50">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 17 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/resident.jpg" alt="Resident Evil Village" title="Resident Evil Village">
    <div class="info_game">
        <h3>Resident Evil Village</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Capcom</li>
                <li><span>Género:</span> Survival Horror</li>
                <li><span>Año de lanzamiento:</span> 2021</li>
                <li><span>Precio:</span> 50 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Resident Evil Village">
                <input type="hidden" name="precio" value="50">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 18 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/finalfantasy.jpg" alt="Final Fantasy XVI" title="Final Fantasy XVI">
    <div class="info_game">
        <h3>Final Fantasy XVI</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Square Enix</li>
                <li><span>Género:</span> RPG</li>
                <li><span>Año de lanzamiento:</span> 2023</li>
                <li><span>Precio:</span> 70 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Final Fantasy XVI">
                <input type="hidden" name="precio" value="70">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 19 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/diablo.jpg" alt="Diablo IV" title="Diablo IV">
    <div class="info_game">
        <h3>Diablo IV</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Blizzard Entertainment</li>
                <li><span>Género:</span> RPG/Acción</li>
                <li><span>Año de lanzamiento:</span> 2023</li>
                <li><span>Precio:</span> 60 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Diablo IV">
                <input type="hidden" name="precio" value="60">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 20 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/fifa.jpg" alt="FIFA 23" title="FIFA 23">
    <div class="info_game">
        <h3>FIFA 23</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> EA Sports</li>
                <li><span>Género:</span> Deportes</li>
                <li><span>Año de lanzamiento:</span> 2022</li>
                <li><span>Precio:</span> 60 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="FIFA 23">
                <input type="hidden" name="precio" value="60">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Videojuego 21 -->
    <div class="video_game">
    <img src="/imagenes/imagenes_compra/starfield.jpg" alt="Starfield" title="Starfield">
    <div class="info_game">
        <h3>Starfield</h3>
        <h4 class="informacion">Información</h4>
        <div class="datos" style="display: none;">
            <ul>
                <li><span>Desarrolladora:</span> Bethesda Game Studios</li>
                <li><span>Género:</span> Ciencia Ficción/RPG</li>
                <li><span>Año de lanzamiento:</span> 2023</li>
                <li><span>Precio:</span> 70 euros</li>
            </ul>
        </div>
        <div class="add_carrito">
            <form method="POST" action="menu_compra.php">
                <input type="hidden" name="producto" value="Starfield">
                <input type="hidden" name="precio" value="70">
                <button type="submit">Add al carrito</button>
            </form>
        </div>
    </div>
</div>



</div>

<script src="/JS/informacionJuego.js"></script>

</body>

