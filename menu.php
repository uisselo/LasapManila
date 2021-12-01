<?php

  $title = "Menu";
  $current_page = "menu";
  include "head.php";
  include "navigation.php";

?>

<body>
  <div class="container">
    <div class="row g-5 mt-5">
      <div class="col-md-8">
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php

          $tabs = [
            "Pork" => "#pork",
            "Chicken" => "#chicken",
            "Beef" => "#beef",
            "Seafood" => "#seafood",
            "Dessert" => "#dessert",
          ];

          foreach ($tabs as $tab => $link) {
            print '
              <li class="nav-item">
                <button
                  ' . ($tab === "Pork" ? 'class="nav-link active"' : 'class="nav-link"' ) . '           
                  data-bs-toggle="tab"
                  data-bs-target="' . $link . '"
                  type="button"
                >
                  ' . $tab . '
                </button>
              </li>
            ';
          }

        ?>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content pt-5" id="myTabContent">
          <!-- Pork -->
          <div class="tab-pane fade show active" id="pork">
            <!-- Food List -->
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Pork Sinigang</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Pork Sisig</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Pork BBQ</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Pork Menudo</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Crispy Pata</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Lechon Kawali</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Inihaw na Liempo</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
          </div>
          <!-- Chicken -->
          <div class="tab-pane fade" id="chicken">
            <!-- Food List -->
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Fried Chicken</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Chicken BBQ</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Tinola</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Chicken Adobo</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
          </div>
          <!-- Beef -->
          <div class="tab-pane fade" id="beef">
            <!-- Food List -->
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Nilagang Baka</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Kaldereta</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Kare-Kare</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Beef Mechado</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="align-self-center">Bulalo</h5>
              <div class="divider"></div>
              <h5 class="lead align-self-center">Php 250</h5>
            </div>
          </div>
        </div>        
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">Freebies</h4>
            <p class="mb-0">
              Customize this section to tell your visitors a little bit about
              your publication, writers, content, or something else entirely.
              Totally up to you.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include "footer.php"; ?>
