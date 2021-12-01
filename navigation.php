<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Lasap Manila</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarResponsive"
      aria-controls="navbarResponsive"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <?php

          $urls = [
              "Home" => "index.php",
              "Menu" => "menu.php",
              "About" => "about.php",
              "Reservations" => "reservations.php",
              "Contact Us" => "contact-us.php"
          ];

          foreach ($urls as $page => $url) {
            print 
            '
              <li ' . ($current_page === $page ? 'class="nav-item active"' : "") .'>
                <a class="nav-link" href="' . $url .'">' . $page . '</a>
              </li>
            ';
          }
        
        ?>
      </ul>
    </div>
  </div>
</nav>
