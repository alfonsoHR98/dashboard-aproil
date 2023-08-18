<?php
  require 'conn.php';

  // Obtención de los valores del formulario de login
  $user = $_POST['user'];
  $pass = $_POST['password'];

  // SQL para la verificación de la existencia del usuario
  $sql_validacion = "SELECT * FROM usuarios WHERE usuario = '$user' AND password = '$pass'";
  $resultado_sql_validacion = mysqli_query($conn, $sql_validacion);

  // Se comprueba si se obtuvo un resultado con el usuario y contraseña dados
  if ($resultado_sql_validacion->num_rows == 1) {

    //se toman los valores del usuario encontrado
    $datos_usuario = mysqli_fetch_assoc($resultado_sql_validacion);

    // Se guarda el id del usuario
    $id_user = $datos_usuario['id_usuario'];
    // SQL para registrar el ingreso a la plataforma
    $sql_registro_ingreso = "INSERT INTO registro_ingresos (id_usuario) VALUES ('$id_user')";
    
    if($conn->query($sql_registro_ingreso)) {
      session_start();
      $_SESSION['ID_USUARIO'] = $id_user;
      header('Location: ../app.php');
    }else{
      header('Location: ../../index.php');
    }
  }
?>