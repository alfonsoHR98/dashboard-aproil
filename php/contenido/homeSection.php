<link rel="stylesheet" href="../../css/body.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="../../css/form.css">

<div class="home-content">
  <i class='bx bx-menu' ></i>
  <span class="text">Drop Down Sidebar</span>
</div>

<div class="body-content">
  <?php
    //Se obtiene el valor de la URL
    $opcion = $_GET['opcion'];
    if ($opcion != NULL) {
      switch ($opcion) {
        case 'configuracion':
          require '../php/informacion/configuracion.php';
          break;
        case 'productos':
          require '../php/pages/productos.php';
          break;
        case 'dashboard':
          require '../php/contenido/dashboard.php';
          break;
      }
    }
  ?>
</div>