<?php
  require_once './functions/conn.php';
  require_once './functions/registros.php';
  require_once './functions/eliminar.php';

  //Validación de envió de formulario y obtención de valores ingresados con validación
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registrar'])) {
    if (empty($_POST['nombre']) || empty($_POST['marca']) || empty($_POST['caracteristicas'])) {
      echo '<script>alert("Por favor, complete todos los campos.");</script>';
    }else {
      $nombre = $conn->real_escape_string($_POST['nombre']);
      $marca = $conn->real_escape_string($_POST['marca']);
      $caracteristicas = $conn->real_escape_string($_POST['caracteristicas']);
      if(isset($_FILES['img']['tmp_name']) && is_uploaded_file($_FILES['img']['tmp_name'])){
        $imagen = file_get_contents($_FILES['img']['tmp_name']);
        registrarProducto($conn, $nombre, $marca, $caracteristicas, $imagen);
      }else{
        $imagen = file_get_contents('../img/hash.jpg');
        registrarProducto($conn, $nombre, $marca, $caracteristicas, $imagen);
      }
    }
  }
  
?>

<div class="animate__animated animate__fadeInRight">
  <h1 class="logo">Sección de <span>Productos</span></h1>
  <div class="information-content">
    <div class="buscador">
      <i class='bx bx-search'></i>
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscar">
      <button id="btn-abrir-modal">+</button>
    </div>
    <table class="table_id">
      <thead>
        <tr>
          <th>IMAGEN</th>
          <th>NOMBRE</th>
          <th>CARACTERÍSTICAS</th>
          <th>MARCA</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql_productos = "SELECT * FROM productos";
          $datos_productos = mysqli_query($conn, $sql_productos);
          if($datos_productos -> num_rows > 0) {
            while($fila = mysqli_fetch_array($datos_productos)){
        ?>
        <tr>
          <td><img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']); ?>" alt="profileImg"></td>
          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['caracteristicas']; ?></td>
          <td><?php echo $fila['marca']; ?></td>
          <td>
            <a id="btn-abrir-editar" href="productos/editar.php?id=<?php echo $fila['id_producto']?>" ><i class='bx bxs-edit' ></i></a>
            <a id="btn-abrir-eliminar" href="productos/eliminar.php?id=<?php echo $fila['id_producto']?>" ><i class='bx bx-trash'></i></a>
          </td>
        </tr>
        <?php
            }
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

<dialog id="modal" class="form">
    <div class="contact-wrapper">
      <div class="contact-form">
        <div class="header-form">
          <button id="btn-cerrar-modal"><i class='bx bx-x'></i></button>
          <h3>Registro de Producto</h3>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" require>
          </p>
          <p>
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" require>
          </p>
          <p class="block">
            <label for="caracteristicas">Caracteristicas</label>
            <textarea name="caracteristicas" id="caracteristicas" rows="2" require></textarea>
          </p>
          <p class="block">
            <label for="img">Imagen</label>
            <input type="file" name="img" id="img" require>
          </p>
          <p class="block">
            <input class="button" type="submit" name="registrar" value="Registrar">
          </p>
      </div>
      <div class="contact-info">
        <h4>Información de registro</h4>
        <p>Ingresar la siguiente información:</p>
        <ul>
          <li> -> Nombre </li>
          <li> -> Marca </li>
          <li> -> Características </li>
          <li> -> Imagen </li>
        </ul>
        <p>* Cada campo es obligatorio, ninguno debe dejarse en blanco.</p>
      </div>
    </div>
</dialog>

<script>
  const btnAbrirModal = document.querySelector("#btn-abrir-modal");
  const btnCerrarModal = document.querySelector("#btn-cerrar-modal");
  const modal = document.querySelector("#modal")

  btnAbrirModal.addEventListener("click", () => {
    modal.showModal();
  })

  btnCerrarModal.addEventListener("click", () => {
    modal.close();
  })

</script>

<script src="../js/buscador.js"></script>