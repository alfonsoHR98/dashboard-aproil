<?php
  require_once './functions/conn.php';
  $id_user = $_SESSION['ID_USUARIO'];
  
  // Obtener la imagen del usuario
  $sql_foto = "SELECT imagen FROM usuarios WHERE id_usuario = '$id_user'";
  $valor_foto = $conn->query($sql_foto);
  $foto = $valor_foto->fetch_assoc();
 
?>

<!-- Div de logo-->
<div class="logo-details">
  <i class='bx bx-package' ></i>
  <span class="logo_name">Aproil Inventory</span>
</div>

<!-- Lista de links-->
<ul class="nav-links">

  <!-- Link unitario-->
  <li>
    <a href="../php/app.php?opcion=dashboard">
      <i class='bx bx-grid-alt' ></i>
      <span class="link_name">Dashboard</span>
    </a>
    <ul class="sub-menu blank">
      <li><a class="link_name" href="../php/app.php?opcion=dashboard">Dashboard</a></li>
    </ul>
  </li>

  <!-- Link unitario-->
  <li>
    <a href="../php/app.php?opcion=productos">
      <i class='bx bxs-cube'></i>
      <span class="link_name">Productos</span>
    </a>
    <ul class="sub-menu blank">
      <li><a class="link_name" href="../php/app.php?opcion=productos">Productos</a></li>
    </ul>
  </li>

  <!-- Link unitario-->
  <li>
    <a href="../php/app.php?opcion=proveedores">
      <i class='bx bxs-truck'></i>
      <span class="link_name">Proveedores</span>
    </a>
    <ul class="sub-menu blank">
      <li><a class="link_name" href="../php/app.php?opcion=proveedores">Proveedores</a></li>
    </ul>
  </li>

  <!-- Link unitario-->
  <li>
    <a href="../php/app.php?opcion=clientes">
      <i class='bx bxs-user-detail' ></i>
      <span class="link_name">Clientes</span>
    </a>
    <ul class="sub-menu blank">
      <li><a class="link_name" href="../php/app.php?opcion=clientes">Clientes</a></li>
    </ul>
  </li>

  <!-- Link anidado -->
  <li>
    <div class="iocn-link">
      <a href="#">
        <i class='bx bx-store-alt'></i>
        <span class="link_name">Ventas</span>
      </a>
      <i class='bx bxs-chevron-down arrow' ></i>
    </div>
    <ul class="sub-menu">
      <li><a class="link_name" href="#">Ventas</a></li>
      <li><a href="../php/app.php?opcion=../php/app.php?opcion=venta">Venta</a></li>
      <li><a href="../php/app.php?opcion=ventas-detalles">Información de venta</a></li>
    </ul>
  </li>

  <!-- Link anidado -->
  <li>
    <div class="iocn-link">
      <a href="#">
        <i class='bx bx-plug' ></i>
        <span class="link_name">Inventario</span>
      </a>
      <i class='bx bxs-chevron-down arrow' ></i>
    </div>
    <ul class="sub-menu">
      <li><a class="link_name" href="#">Inventario</a></li>
      <li><a href="#">UI Face</a></li>
      <li><a href="#">Pigments</a></li>
      <li><a href="#">Box Icons</a></li>
    </ul>
  </li>

  <!-- Link anitario -->
  <li>
    <a href="#">
      <i class='bx bx-compass' ></i>
      <span class="link_name">Explore</span>
    </a>
    <ul class="sub-menu blank">
      <li><a class="link_name" href="#">Explore</a></li>
    </ul>
  </li>

  <!-- Link anitario -->
  <li>
    <a href="#">
      <i class='bx bx-history'></i>
      <span class="link_name">History</span>
    </a>
    <ul class="sub-menu blank">
      <li><a class="link_name" href="#">History</a></li>
    </ul>
  </li>

  <!-- Link unitario -->
  <li>
    <a href="../php/app.php?opcion=configuracion">
      <i class='bx bx-cog' ></i>
      <span class="link_name">Setting</span>
    </a>
    <ul class="sub-menu blank">
      <li><a class="link_name" href="../php/app.php?opcion=configuracion">Setting</a></li>
    </ul>
  </li>
  
  <!-- Muestra de perfil-->
  <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="data:image/jpg;base64,<?php echo base64_encode($foto['imagen']); ?>" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Alfonso</div>
        <div class="job">Web Desginer</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>

<!-- Fin de la lista de links -->
</ul>

