
<div class="home-content">
  <i class='bx bx-menu' ></i>
  <span class="text">Drop Down Sidebar</span>
</div>

<div class="body-content">
<?php
    // Obtén el valor de la variable 'opcion' desde la URL
    $opcion = isset($_GET['opcion']) ? $_GET['opcion'] : 'inicio';

    // Define un array de opciones disponibles y sus correspondientes archivos PHP
    $opciones_disponibles = [
        'configuracion' => '../php/informacion/configuracion.php',
        'productos' => '../php/pages/productos.php',
        'dashboard' => '../php/contenido/dashboard.php',
        'proveedores' => '../php/pages/proveedores.php',
        'clientes' => '../php/pages/clientes.php',
    ];

    // Verifica si la opción solicitada existe en el array
    if (array_key_exists($opcion, $opciones_disponibles)) {
        // Incluye la opción correspondiente
        require $opciones_disponibles[$opcion];
    } else {
        // Página no encontrada, puedes redirigir a una página de error 404
        header('HTTP/1.0 404 Not Found');
        echo 'Opción no encontrada';
    }
  ?>
</div>