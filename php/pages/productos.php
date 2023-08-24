<?php
  require_once '../functions/conn.php';

  if (isset($_POST['registrar'])){
    //Se obtienen los valores del formulario y se prevé una inyección SQL
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $marca = $conn->real_escape_string($_POST['marca']);
    $caracteristicas = $conn->real_escape_string($_POST['caracteristicas']);
    if (isset($_FILES['img']['tmp_name']) && is_uploaded_file($_FILES['img']['tmp_name'])) {
      $imagen = file_get_contents($_FILES['img']['tmp_name']);
    }else{
      $imagen = file_get_contents('../../img/pozo-petrolero.jpg');
    }

    //Sentencia SQL para la inserción en la BD
    $sql_registrar = "INSERT INTO productos (nombre, caracteristicas, marca, estado, imagen)
    VALUES (?, ?, ?, TRUE, ?)";

    $stmt = $conn->prepare($sql_registrar);
    $stmt->bind_param("sssb", $nombre, $caracteristicas, $marca, $imagen);
    
    if ($stmt->execute()) {
      echo '<script>alert("Registro exitoso");</script>';
    }else{
      echo '<script>alert("Registro erroneo: ' . $stmt->error . '");</script>';
    }
  }

  ?>
  
<div class="form animate__animated animate__fadeInRight">
  <h1 class="logo">Sección de <span>Productos</span></h1>
  <div class="contact-wrapper">
    <div class="contact-form">
      <h3>Registro de producto</h3>
      <form action="">
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
          <button type="submit" name="registrar">Registrar producto</button>
        </p>
      </form>
    </div>
    <div class="contact-info">
      <h4>Información de registro</h4>
      <p>Aquí debemos ingresar la siguiente información:</p>
      <ul>
        <li> -> Nombre </li>
        <li> -> Marca </li>
        <li> -> Características </li>
        <li> -> Imagen </li>
      </ul>
      <p>Cada campo es requerido, ninguno debe dejarse en blanco.</p>
    </div>
  </div>
</div>
