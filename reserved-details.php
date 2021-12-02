<?php

  $title = "Resered Tables and Events";
  $current_page = "reserved details";
  include "head.php";
  include "navigation.php";

  $conn = mysqli_connect("localhost","root","","reservations");
        
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>

<body>
  <div class="container pt-5">
    <h1 class="mt-5 mb-4 pb-3 border-bottom">Reserved Tables and Events</h1>      
    
    <table class="table table-striped caption-top mb-5">
      <caption class="lead">Details of Reserved Tables</caption>
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Booked Date</th>
          <th scope="col">No. of People</th>
          <th scope="col">Instructions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          
          $reserved_tables = "SELECT 
                                reservation_id, 
                                full_name, 
                                email, 
                                contact_no, 
                                booked_date, 
                                numOfPpl, 
                                instructions 
                              FROM tables";
          
          $resultA = $conn->query($reserved_tables);

          if ($resultA->num_rows > 0) {
            while ($row = $resultA->fetch_assoc()) {
              echo '
                <tr>
                  <th scope="row">'. $row["reservation_id"] .'</th>
                  <td>'. $row["full_name"] .'</td>
                  <td>'. $row["email"] .'</td>
                  <td>'. $row["contact_no"] .'</td>
                  <td>'. $row["booked_date"] .'</td>
                  <td>'. $row["numOfPpl"] .'</td>
                  <td>'. $row["instructions"] .'</td>
                </tr>
              ';
            }
          } else {
            echo "No result.";
          }

        ?>
      </tbody>
    </table>
    <table class="table table-striped caption-top pb-5">
      <caption class="lead">Details of Reserved Events</caption>
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Booked Date</th>
          <th scope="col">Booked Time</th>
          <th scope="col">No. of People</th>
          <th scope="col">Title of the Event</th>
          <th scope="col">Instructions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          
          $reserved_events = "SELECT 
                                reservation_id, 
                                full_name, 
                                email, 
                                contact_no, 
                                booked_date, 
                                booked_time, 
                                numOfPpl, 
                                event_title, 
                                instructions 
                              FROM events";

          $resultB = $conn->query($reserved_events);

          if ($resultB->num_rows > 0) {
            while ($row = $resultB->fetch_assoc()) {
              echo '
                <tr>
                  <th scope="row">'. $row["reservation_id"] .'</th>
                  <td>'. $row["full_name"] .'</td>
                  <td>'. $row["email"] .'</td>
                  <td>'. $row["contact_no"] .'</td>
                  <td>'. $row["booked_date"] .'</td>
                  <td>'. $row["booked_time"] .'</td>
                  <td>'. $row["numOfPpl"] .'</td>
                  <td>'. $row["event_title"] .'</td>
                  <td>'. $row["instructions"] .'</td>
                </tr>
              ';
            }
          } else {
            echo "No result.";
          }

        ?>
      </tbody>
    </table>      
  </div>
</body>

<?php 

  $conn->close();
  
  include "footer.php"; 
  
?>
