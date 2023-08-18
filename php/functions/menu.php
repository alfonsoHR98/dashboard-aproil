<div class="sidebar close">

  <!-- Div de logo-->
  <div class="logo-details">
    <i class='bx bx-package' ></i>
    <span class="logo_name">Aproil Inventory</span>
  </div>

  <!-- Lista de links-->
  <ul class="nav-links">

    <!-- Link unitario-->
    <li>
      <a href="#">
        <i class='bx bx-grid-alt' ></i>
        <span class="link_name">Dashboard</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Category</a></li>
      </ul>
    </li>

    <!-- Link Anidado -->
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-collection' ></i>
          <span class="link_name">Category</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Category</a></li>
        <li><a href="#">HTML & CSS</a></li>
        <li><a href="#">JavaScript</a></li>
        <li><a href="#">PHP & MySQL</a></li>
      </ul>
    </li>

    <!-- Link anidado -->
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-book-alt' ></i>
          <span class="link_name">Posts</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Posts</a></li>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Login Form</a></li>
        <li><a href="#">Card Design</a></li>
      </ul>
    </li>

    <!-- Link unitario -->
    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2' ></i>
        <span class="link_name">Analytics</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Analytics</a></li>
      </ul>
    </li>

    <!-- Link unitario -->
    <li>
      <a href="#">
        <i class='bx bx-line-chart' ></i>
        <span class="link_name">Chart</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Chart</a></li>
      </ul>
    </li>

    <!-- Link anidado -->
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-plug' ></i>
          <span class="link_name">Plugins</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Plugins</a></li>
        <li><a href="#">UI Face</a></li>
        <li><a href="#">Pigments</a></li>
        <li><a href="#">Box Icons</a></li>
      </ul>
    </li>

    <!-- Link anitario -->
    <li>
      <a href="#">
        <i class='bx bx-compass' ></i>
        <span class="link_name">Explore</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Explore</a></li>
      </ul>
    </li>

    <!-- Link anitario -->
    <li>
      <a href="#">
        <i class='bx bx-history'></i>
        <span class="link_name">History</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">History</a></li>
      </ul>
    </li>

    <!-- Link unitario -->
    <li>
      <a href="#">
        <i class='bx bx-cog' ></i>
        <span class="link_name">Setting</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Setting</a></li>
      </ul>
    </li>
    
    <!-- Muestra de perfil-->
    <li>
      <div class="profile-details">
        <div class="profile-content">
          <img src="img/hash.jpg" alt="profileImg">
        </div>
        <div class="name-job">
          <div class="profile_name">Alfonso</div>
          <div class="job">Web Desginer</div>
        </div>
        <i class='bx bx-log-out' ></i>
      </div>
    </li>
  
  <!-- Fin de la lista de links -->
  </ul>
  
<!-- Fin del sidebar-->
</div>

<!-- Sección para ocultar -->
<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>
    <span class="text">Drop Down Sidebar</span>
  </div>
</section>

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