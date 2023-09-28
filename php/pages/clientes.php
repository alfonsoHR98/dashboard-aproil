<?php
  require_once './functions/conn.php';
  require_once './functions/registros.php';
  require_once './functions/eliminar.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registrar'])){
    if (empty($_POST['nombre']) || empty($_POST['rfc']) || empty($_POST['telefono']) || empty($_POST['correo']) || empty($_POST['direccion'])){
      echo '<script>alert("Por favor, complete todos los campos.");</script>';
    }else{
      $nombre = $conn->real_escape_string($_POST['nombre']);
      $rfc = $conn->real_escape_string($_POST['rfc']);
      $telefono = $conn->real_escape_string($_POST['telefono']);
      $correo = $conn->real_escape_string($_POST['correo']);
      $direccion = $conn->real_escape_string($_POST['direccion']);
      registrarCliente($conn, $nombre, $direccion, $rfc, $correo, $telefono);
    }
  }
?>

<div class="animate__animated animate__fadeInRight">
  <h1 class="logo">Sección de <span>Clientes</span></h1>
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
          <th>NOMBRE</th>
          <th>DIRECCIÓN</th>
          <th>RFC</th>
          <th>CORREO</th>
          <th>TELÉFONO</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql_clientes = "SELECT * FROM clientes WHERE estado = 1";
          $datos_clientes = mysqli_query($conn, $sql_clientes);
          if($datos_clientes -> num_rows > 0) {
            while($fila = mysqli_fetch_array($datos_clientes)){
        ?>
        <tr>
          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['direccion']; ?></td>
          <td><?php echo $fila['rfc']; ?></td>
          <td><?php echo $fila['correo']; ?></td>
          <td><?php echo $fila['telefono']; ?></td>
          <td>
            <a id="btn-abrir-editar" href="../php/pages/clientes/editar.php?id=<?php echo $fila['id_cliente']?>" ><i class='bx bxs-edit' ></i></a>
            <button id="eliminar" data-id="<?php echo $fila['id_cliente']; ?>"><i class='bx bx-trash'></i></button>
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
          <h3>Registro de Cliente</h3>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" require>
          </p>
          <p>
            <label for="rfc">RFC</label>
            <input type="text" name="rfc" id="rfc" require>
          </p>
          <p>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" require>
          </p>
          <p>
            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" require>
          </p>
          <p class="block">
            <label for="direccion">Dirección</label>
            <textarea name="direccion" id="direccion" rows="2" require></textarea>
          </p>
          <p class="block">
            <input class="button" type="submit" name="registrar" value="Registrar">
          </p>
        </form>
      </div>
      <div class="contact-info">
        <h4>Información de registro</h4>
        <p>Ingresar la siguiente información:</p>
        <ul>
          <li> -> Nombre </li>
          <li> -> RFC </li>
          <li> -> Teléfono </li>
          <li> -> Correo </li>
          <li> -> Dirección </li>
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