<?php

  $title = "Home";
  $current_page = "index";
  include "head.php";
  include "navigation.php";

?>

<body>
  <!-- Section 1 -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="fw-light text-white">Welcome to Lasap Manila</h1>
          <p class="lead text-white">
            Experience the best of Filipino cuisine.
          </p>
          <a class="btn btn-outline-light" href="reservations.php">Reserve Now</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Section 2 -->
  <div class="container">
    <div class="row align-items-md-stretch mt-5">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark imgStory"></div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border">
          <h2>Our Story</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam,
            diam sed porta efficitur, nibh ipsum laoreet eros, at dictum diam erat
            ut magna. Proin mattis erat at mi finibus, id blandit augue
            sollicitudin. In vitae nisl quis sem consequat eleifend. Morbi eget
            lectus sit amet justo pharetra dapibus at.
          </p>
          <a class="btn btn-outline-secondary" type="button" href="about.php">
            Learn More
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 3 -->
  <div class="container mt-5">
    <div class="d-flex justify-content-center">
      <div class="row g-5 py-5 row-cols-1 row-cols-lg-3 mx-5">
        <div class="d-flex align-items-start px-5">
          <img
            src="./assets/images/2.png"
            class="bi text-muted flex-shrink-0 me-3"
            width="30px"
          />
          <div>
            <h4 class="fw-bold mb-0">Location</h4>
            <p>123, Lorem Ipsum St.,<br />Bonifacio Global City, Metro Manila</p>
          </div>
        </div>
        <div class="d-flex align-items-start px-5">
          <img
            src="./assets/images/3.png"
            class="bi text-muted flex-shrink-0 me-3"
            width="30px"
          />
          <div>
            <h4 class="fw-bold mb-0">Opening Hours</h4>
            <p>
              Weekdays - 9am to Midnight <br />
              Weekends - 10am to 8pm
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start px-5">
          <img
            src="./assets/images/4.png"
            class="bi text-muted flex-shrink-0 me-3"
            width="30px"
          />
          <div>
            <h4 class="fw-bold mb-0">Contact</h4>
            <p>
                hello@lasapmanila.com<br />
                (02) 1234 5678
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include "footer.php"; ?>
