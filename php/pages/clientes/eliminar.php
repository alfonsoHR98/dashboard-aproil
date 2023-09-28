<?php
  require '../../functions/conn.php';

  if (isset($_GET['id'])) {
    $id_cliente = $_GET['id'];
    $query = "UPDATE clientes SET estado = 0 WHERE id_cliente = $id_cliente";
    if ($conn -> query($query)) {
      header("Location: ../php/app.php?opcion=clientes");
    }else{
      header("Location: ../php/app.php?opcion=clientes");
    }
  }
  
?>