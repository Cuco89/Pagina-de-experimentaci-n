<?php
// Iniciar sesión
session_start();


// Si el usuario no está logueado, redirigir al formulario de inicio de sesión
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

if(isset($_GET['borrar_carrito'])){
     $_SESSION['carrito']=[];
     echo "El carrito esta vacio";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar_producto'])) {
    $productoAEliminar = $_POST['eliminar_producto'];

    // Buscar y eliminar el producto en el carrito
    foreach ($_SESSION['carrito'] as $key => $producto) {
        if ($producto['nombre'] === $productoAEliminar) {
            unset($_SESSION['carrito'][$key]);
            // Reindexar el array después de eliminar
            $_SESSION['carrito'] = array_values($_SESSION['carrito']);
            break;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
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


<div class="borrar_carrito">
        <h2>Carrito</h2>
        <form method="GET" action="carrito.php">
            <input type="hidden" name ="borrar_carrito" value="borrar_carrito">
            
            <button type="submit"><img src="/imagenes/papelera.png" alt=""></button>
        </form>
</div>

<div class="carrito">
<?php
// Verificar si hay productos en el carrito
if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
    // Mostrar la cantidad total de productos en el carrito
    echo "<p> Total productos del carrito: " . count($_SESSION['carrito']) . "</p>";
    
    // Mostrar la tabla de carrito
    echo "<table id='tablaCarrito' border='1' cellpadding='5'>";
    echo "<tr><th>Nombre del Producto</th><th>Precio</th><th>Borrar</th></tr>";

    // Recorrer y mostrar cada producto en el carrito
    foreach ($_SESSION['carrito'] as $producto) {
        $titulo = $producto['nombre'];
        $precio = $producto['precio'];
        echo "<tr>";
        echo "<td>$titulo</td>";
        echo "<td>$precio</td>";
        echo "<td>
        <form method='POST'>
            <input type='hidden' name='eliminar_producto' value='$titulo'>
            <button type='submit' class='borrar_individual'>
                <img src='/imagenes/x.png' alt='Eliminar'>
            </button>
        </form>
    </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>El carrito está vacío</p>";
}
?>
</div>
</body>
</html>


</div>
</body>
</html>