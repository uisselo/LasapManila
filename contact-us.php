<?php

  $title = "Contact Us";
  $current_page = "contact";
  include "head.php";
  include "navigation.php";

?>

<body>
  <div class="container pt-5">
    <h1 class="mt-5 mb-4 pb-3 border-bottom">Contact Us</h1>
    <div class="row featurette">
      <div class="col-md-7">
        <p class="lead">For inquiries, please fill up this form.</p>
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            placeholder="Juan Dela Cruz"
          />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="name@example.com"
          />
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="4"></textarea>
        </div>
        <button type="button" class="btn btn-secondary mb-3">Submit</button>
      </div>
      <div class="col-md-5 p-5">
        <div class="d-flex align-items-start p-3">
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
        <div class="d-flex align-items-start p-3">
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
        <div class="d-flex align-items-start p-3">
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
