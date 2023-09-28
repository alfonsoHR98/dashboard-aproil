<?php 
  // CARGA DE LAS VARIABLES DE ENTORNO
  require './variables.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/login.css">
  <title>Aproil</title>
</head>
<body>
  <section>
    <div class="login-box">
      <form method="POST" action="./php/functions/validation.php">
        <h2>Aproil</h2>
        <div class="input-box">
          <span class="icon"><i class='bx bx-user'></i></span>
          <input type="text" name="user" id="user" required>
          <label for="">User</label>
        </div>
        <div class="input-box">
          <span class="icon"><i class='bx bx-lock-alt'></i></span>
          <input type="password" name="password" id="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember-forgot">
          <label for=""><input type="checkbox" name="" id="">Remember me</label>
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit">Login</button>
        <div class="register-link">
          <p>Don't have an account? <a href="#">Register</a></p>
        </div>
      </form>
    </div>
  </section>
</body>
</html>