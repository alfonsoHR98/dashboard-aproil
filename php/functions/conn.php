<?php
  require '../../variables.php';

  // Se crea la variable co la que se harán las conexiones a la base de datos
  // haciendo uso de las variables de entrono
  $conn = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);

  // De ser errónea la conexión no se continua con el proceso
  if (!$conn) {
    die("CONNECTION FAILED: " . mysqli_connect_error());
  }

?>