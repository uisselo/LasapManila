<?php

  $title = "Reservations";
  $current_page = "reservations";
  include "head.php";
  include "navigation.php";

?>

<body>
  <!-- Book a Table Modal Form -->
  <div class="modal fade py-5" id="table">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h2 class="fw-bold mb-0">Book a Table</h2>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="POST">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control rounded-4"
                id="nameA"
                name="nameA"
                placeholder="Juan Dela Cruz"
              />
              <label for="nameA">Full Name</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="email"
                class="form-control rounded-4"
                id="emailA"
                name="emailA"
                placeholder="name@example.com"
              />
              <label for="emailA">Email Address</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control rounded-4"
                id="contactA"
                name="contactA"
                placeholder="Contact Number"
              />
              <label for="contactA">Contact Number</label>
            </div>
            <div class="row g-2 mb-3">
              <div class="col-md">
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    id="dateA"
                    name="dateA"
                    placeholder="MM/DD/YY"
                  />
                  <label for="dateA">Date</label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <select class="form-select" id="numOfPplA" name="numOfPplA">
                    <option selected disabled>Choose number of people</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  <label for="numOfPplA">Number of People</label>
                </div>
              </div>
            </div>
            <div class="form-floating mb-3">
              <textarea
                type="text"
                class="form-control rounded-4"
                id="instructionsA"
                name="instructionsA"
                placeholder="Instructions"
                style="height: 100px"
              ></textarea>
              <label for="instructionsA"
                >Instructions
                <small class="text-muted">(Optional)</small></label
              >
            </div>
            <input
              class="w-100 btn btn-lg rounded-4 btn-secondary"
              type="submit"
              name="submitA"
              value="Complete"
            />
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Book an Event Modal Form -->
  <div class="modal fade py-5" id="event">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h2 class="fw-bold mb-0">Book an Event</h2>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="POST">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control rounded-4"
                id="nameB"
                name="nameB"
                placeholder="Juan Dela Cruz"
              />
              <label for="nameB">Full Name</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="email"
                class="form-control rounded-4"
                id="emailB"
                name="emailB"
                placeholder="name@example.com"
              />
              <label for="emailB">Email Address</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control rounded-4"
                id="contactB"
                name="contactB"
                placeholder="Contact Number"
              />
              <label for="contactB">Contact Number</label>
            </div>
            <div class="row g-2 mb-3">
              <div class="col-md">
                <div class="form-floating">
                  <input
                    type="date"
                    class="form-control"
                    id="dateB"
                    name="dateB"
                    placeholder="MM/DD/YY"
                  />
                  <label for="dateB">Date</label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <select class="form-select" id="time" name="time">
                    <option selected disabled>Choose Time</option>
                    <option value="9am">9am</option>
                    <option value="10am">10am</option>
                    <option value="11am">11am</option>
                    <option value="12nn">12nn</option>
                    <option value="1pm">1pm</option>
                    <option value="2pm">2pm</option>
                    <option value="3pm">3pm</option>
                  </select>
                  <label for="time">Time</label>
                </div>
              </div>
            </div>
            <div class="form-floating mb-3">
              <select class="form-select" id="numOfPplB" name="numOfPplB">
                <option selected disabled>Choose number of people</option>
                <option value="10-20">10 to 20 (minimum 10)</option>
                <option value="20-40">20 to 40 (minimum 20)</option>
              </select>
              <label for="numOfPplB">Number of People</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control rounded-4"
                id="eventTitle"
                name="eventTitle"
                placeholder="Title of the Event"
              />
              <label for="eventTitle">Title of the Event</label>
            </div>
            <div class="form-floating mb-3">
              <textarea
                type="text"
                class="form-control rounded-4"
                id="instructionsB"
                name="instructionsB"
                placeholder="Instructions"
                style="height: 100px"
              ></textarea>
              <label for="instructionsB">
                Instructions
                <small class="text-muted">(Optional)</small></label>
            </div>
            <input
              class="w-100 btn btn-lg rounded-4 btn-secondary"
              type="submit"
              name="submitB"
              value="Complete"
            />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container pt-5">
    <h1 class="mt-5 pb-3 border-bottom">Reservations</h1>
    <!-- Section 1 -->
    <div class="row align-items-md-center mt-2 g-3">
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border">
          <h2>Book a Table</h2>
          <h5 class="lead pb-2">
            Skip the long lines, save your time. Book a table now!
          </h5>
          <button
            class="btn btn-outline-secondary"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#table"
          >
            Proceed
          </button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-dark border text-light">
          <h2>Book an Event</h2>
          <h5 class="lead pb-2">
            Enjoy Lasap Manila's delicious menu for your events. Book now!
          </h5>
          <button
            class="btn btn-outline-light"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#event"
          >
            Proceed
          </button>
        </div>
      </div>
    </div>
    <!-- Section 2 -->
    <div class="d-flex justify-content-center mt-5">
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

<?php 

  $conn = mysqli_connect("localhost","root","","reservations");
        
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_POST['submitA'])) {
    $name = $_POST['nameA'];
    $email = $_POST['emailA'];
    $contact = $_POST['contactA'];
    $date = $_POST['dateA'];    
    $numOfPpl = $_POST['numOfPplA'];    
    $instructions = $_POST['instructionsA'];

    $insert = "INSERT INTO 
                  tables(
                    full_name, 
                    email, 
                    contact_no, 
                    booked_date,
                    numOfPpl,
                    instructions) 
                  VALUES (
                    '". $name ."',
                    '". $email ."',
                    '". $contact ."',
                    '". $date ."',
                    '". $numOfPpl ."',
                    '". $instructions ."'
                  )";

    if  ($conn->query($insert) == TRUE) {
      // echo "Successfully added to DB.";
      echo '<script>window.location = "http://localhost/LasapManila/reserved-details.php" </script>';
    } else {
      echo "Failed to add to DB.";
    }
  }

  if (isset($_POST['submitB'])) {
    $name = $_POST['nameB'];
    $email = $_POST['emailB'];
    $contact = $_POST['contactB'];
    $date = $_POST['dateB'];
    $time = $_POST['time'];
    $numOfPpl = $_POST['numOfPplB'];
    $eventTitle = $_POST['eventTitle'];
    $instructions = $_POST['instructionsB'];

    $insert = "INSERT INTO 
                  events(
                    full_name, 
                    email, 
                    contact_no, 
                    booked_date, 
                    booked_time,
                    numOfPpl,  
                    event_title,
                    instructions) 
                  VALUES (
                    '". $name ."',
                    '". $email ."',
                    '". $contact ."',
                    '". $date ."',
                    '". $time ."',
                    '". $numOfPpl ."',
                    '". $eventTitle ."',
                    '". $instructions ."'
                  )";

    if  ($conn->query($insert) == TRUE) {
      // echo "Successfully added to DB.";
      echo '<script>window.location = "http://localhost/LasapManila/reserved-details.php" </script>';
    } else {
      echo "Failed to add to DB.";
    }
  }

  $conn->close();

  include "footer.php"; 
  
?>
