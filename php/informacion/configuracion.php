<?php
  require_once '../php/functions/conn.php';
  $id_user = $_SESSION['ID_USUARIO'];
  $sql_usuario = "SELECT * FROM usuarios WHERE id_usuario = '$id_user'";
  $valor_usuario = $conn->query($sql_usuario);
  $info_user = $valor_usuario->fetch_assoc();

  if (isset($_POST['actualizar'])) {
    $file = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $query = "UPDATE usuarios SET imagen = '$file' WHERE id_usuario = $id_user";
    $conn->query($query);
  }

?>

<div class="form animate__animated animate__fadeInRight">
    <h1 class="logo">Configuración de <span>Usuario</span></h1>
    <div class="contact-wrapper">
      <div class="contact-form">
        <h3>Datos personales</h3>
        <form method="post" enctype="multipart/form-data">
          <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $info_user['nombres'] ?>" readonly>
          </p>
          <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" value="<?php echo $info_user['apellidos'] ?>" readonly>
          </p>
          <p>
            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" value="<?php echo $info_user['correo'] ?>" readonly>
          </p>
          <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" value="<?php echo $info_user['usuario'] ?>" readonly>
          </p>
        </form>
      </div>
      <div class="contact-info">
        <img src="data:image/jpg;base64,<?php echo base64_encode($info_user['imagen']); ?>" alt="Foto del usuario" srcset="">
        <form method="post" enctype="multipart/form-data">
          <input type="file" name="img" id="img" require>
          <button class="actualizar" type="submit" name="actualizar">Cambiar foto</button>
        </form>
      </div>
    </div>
  </div>