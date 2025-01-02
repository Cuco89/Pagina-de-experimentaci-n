<?php
session_start();

// Array asociativo con los usuarios y sus contraseñas
$usuarios = [
    'mariano' => '12345',
    'maria' => '67891',
    'miguel' => '23456',
];

// Si ya está logueado, redirigir directamente a la página principal
if (isset($_SESSION['usuario'])) {
    header('Location: principal.php'); // Redirigir a la página principal
    exit();
}

// Si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Verificar si el usuario existe y la contraseña es correcta
    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $contraseña) {
        // Si la validación es correcta, iniciar sesión
        $_SESSION['usuario'] = $usuario;
        header('Location: principal.php'); // Redirigir a la página principal
        exit();
    } else {
        $error = 'Usuario o contraseña incorrectos.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone - Inicio de sesión</title>
    <link rel="stylesheet" type="text/css" href="/CSS/style_index.css"/>
</head>
<body>

    <header class="navbar">
        <div class="logo"><img src="/imagenes/logo.png" alt=""></div>
        <nav class="menu">
            <a href="index.php">Inicio</a>
            <a href="sobre_mi">Sobre mi</a>
            <a href="videojuegos.php">Videojuegos</a>
            <a href="menu_compra.php">Ir de compras</a>
            <a href ="menu_musica.html"> Musica </a>
            <a style="margin-left: 850px;" href="carrito.php">Carrito</a>
        </nav>
    </header>

    <div class="presentacion">
    <h1>Bienvenido a GameZone</h1>
    <br>
    <p>Por favor, ingresa tus datos para continuar:</p>
    <br>

    <!-- Formulario de inicio de sesión -->
    <form method="POST" action="index.php">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br> <!-- Otro salto de línea entre los campos -->

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required>
        <br> <!-- Otro salto de línea -->
        
        <button type="submit">Iniciar sesión</button>
    </form>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
</div>

    
</body>
</html>
