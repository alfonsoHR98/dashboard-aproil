<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/root.css">
  <!-- Link para llamar animaciones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>APROIL</title>
</head>
<body>
  <div class="container">
    <div class="sidebar close">
      <?php include('./contenido/sidebar.php'); ?>
    </div>
    <div class="home-section">
      <?php include('./contenido/homeSection.php'); ?>
    </div>
  </div>

  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
      let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
      arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });
  </script>
</body>
</html>