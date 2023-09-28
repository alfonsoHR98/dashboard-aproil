<?php
  
  function registrarProducto($conn, $nombre, $marca, $caracteristicas, $imagen) {
    // Sentencia SQL para la inserción en la BD
    $sql_registrar = "INSERT INTO productos (nombre, caracteristicas, marca, estado, imagen)
    VALUES (?, ?, ?, TRUE, ?)";

    $stmt = $conn->prepare($sql_registrar);
    $stmt->bind_param("ssss", $nombre, $caracteristicas, $marca, $imagen);

    if ($stmt->execute()) {
        // Redirigir después de la inserción a una página de confirmación
        header("Location: ../app.php?opcion=productos"); // Cambia confirmacion.php por la página que desees
        exit(); // Asegura que no haya más salida después de la redirección
    } else {
        // Manejo de errores, puedes registrar el error en un archivo de registro
        error_log("Error en la inserción: " . $stmt->error);
        // Puedes mostrar un mensaje de error al usuario si lo deseas
        echo '<script>alert("Registro erroneo. Por favor, inténtalo de nuevo más tarde.");</script>';
    }
  }

  function registrarCliente($conn, $nombre, $direccion, $rfc, $correo, $telefono) {
    $sql_registrar = "INSERT INTO clientes (nombre, direccion, rfc, correo, telefono)
    VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql_registrar);
    $stmt->bind_param("sssss", $nombre, $direccion, $rfc, $correo, $telefono);
    if ($stmt->execute()) {
      echo '<script>alert("Registro exitoso!");</script>';
      exit;
    } else {
      echo '<script>alert("Registro erroneo: ' . $stmt->error . '");</script>';
      exit;
    }
  }

  function registrarProveedores($conn, $nombre, $rfc, $telefono, $direccion, $correo) {
    $sql_registrar = "INSERT INTO provedores (nombre, rfc, telefono, direccion, correo)
    VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql_registrar);
    $stmt->bind_param("sssss", $nombre, $rfc, $telefono, $direccion, $correo);
    if ($stmt->execute()) {
      echo '<script>alert("Registro exitoso!");</script>';
      exit;
    } else {
      echo '<script>alert("Registro erroneo: ' . $stmt->error . '");</script>';
      exit;
    }
  }

?>