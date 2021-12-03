<?php

  $title = "Menu";
  $current_page = "menu";
  include "head.php";
  include "navigation.php";

?>

<body>
  <div class="container pt-5">
    <h1 class="mt-5 mb-4 pb-3 border-bottom">Menu</h1>
    <div class="row g-3">
      <div class="col-md-8">
        <div id="gallery" class="carousel slide mb-4" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#gallery" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/images/2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="./assets/images/3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="./assets/images/4.jpg" class="d-block w-100">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#gallery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#gallery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php

          $tabs = [
            "Rice" => "rice",
            "Pork" => "pork",
            "Chicken" => "chicken",
            "Beef" => "beef",
            "Seafood" => "seafood",
            "Vegetable" => "vegetable",
            "Dessert" => "dessert",
            "Beverage" => "beverage",
          ];

          foreach ($tabs as $tab => $link) {
            print '
              <li class="nav-item">
                <button
                  ' . ($tab === "Rice" ? 'class="nav-link active"' : 'class="nav-link"' ) . '           
                  data-bs-toggle="tab"
                  data-bs-target="#'. $link. '"
                  type="button"
                >
                  ' . $tab . '
                </button>
              </li>
            ';
          }

        ?>
        </ul>

        <?php

          class Menu {
            public $menu_list = array();
            public function DisplayMenu($menu_list) {
              foreach ($menu_list as $dish => $price) {
                print '
                  <div class="d-flex justify-content-between">
                    <h5 class="align-self-center">'. $dish .'</h5>
                    <div class="divider"></div>
                    <h5 class="lead align-self-center">'. $price .'</h5>
                  </div>
                ';
              }
            }
          }

          $menu = new Menu();

          $rice = [
            "Plain Rice" => "Php 30",
            "Garlic Rice" => "Php 45",
            "Java Rice" => "Php 60",
            "Seafood Rice" => "Php 60",
          ];
          $pork = [
            "Pork Sinigang" => "Php 250",
            "Pork Adobo" => "Php 180",
            "Pork Sisig" => "Php 210",
            "Pork BBQ" => "Php 230",
            "Pork Menudo" => "Php 170",
            "Crispy Pata" => "Php 320",
            "Lechon Kawali" => "Php 300",
            "Inihaw na Liempo" => "Php 260",
          ];
          $chicken = [
            "Chicken Tinola" => "Php 160",
            "Chicken Adobo" => "Php 180",
            "Chicken BBQ" => "Php 210",
            "Chicken Afritada" => "Php 180",
            "Fried Chicken" => "Php 180",            
          ];
          $beef = [
            "Nilagang Baka" => "Php 200",
            "Kaldereta" => "Php 180",
            "Kare-Kare" => "Php 210",
            "Mechado" => "Php 180",
            "Bulalo" => "Php 280",
          ];
          $seafood = [
            "Sinigang na Hipon" => "Php 180",
            "Sinigang na Bangus" => "Php 230",
            "Boneless Bangus" => "Php 210",
            "Adobong Pusit" => "Php 270",
            "Kinilaw na Isda" => "Php 150",
            "Ginataang Alimango" => "Php 320",
          ];
          $vegetable = [
            "Pinakbet" => "Php 180",
            "Chopsuey" => "Php 220",
            "Ginisang Monggo" => "Php 170",
            "Tortang Talong" => "Php 140",
            "Ginisang Kalabasa at Sitaw" => "Php 150",
          ];
          $dessert = [
            "Halo Halo" => "Php 160",
            "Buko Pandan" => "Php 130",
            "Leche Flan" => "Php 180",
            "Mais con Yelo" => "Php 140",
            "Maja Blanca" => "Php 220",
            "Silvana" => "Php 240",
          ];
          $beverage = [
            "Mango Juice" => "Php 70",
            "Buko Juice" => "Php 70",
            "Iced Tea" => "Php 60",
            "Coke" => "Php 60",
            "Pepsi" => "Php 60",
            "Mountain Dew" => "Php 60",
            "Mug Rootbeer" => "Php 60"
          ];

        ?>

        <!-- Tab Content -->
        <div class="tab-content pt-5" id="myTabContent">
          <div class="tab-pane fade show active" id="rice">
            <?php $menu->DisplayMenu($rice); ?>
          </div>
          <div class="tab-pane fade" id="pork">
            <?php $menu->DisplayMenu($pork); ?>
          </div>
          <div class="tab-pane fade" id="chicken">
            <?php $menu->DisplayMenu($chicken); ?>
          </div>
          <div class="tab-pane fade" id="beef">
            <?php $menu->DisplayMenu($beef); ?>
          </div>
          <div class="tab-pane fade" id="seafood">
            <?php $menu->DisplayMenu($seafood); ?>
          </div>
          <div class="tab-pane fade" id="vegetable">
            <?php $menu->DisplayMenu($vegetable); ?>
          </div>
          <div class="tab-pane fade" id="dessert">
            <?php $menu->DisplayMenu($dessert); ?>
          </div>
          <div class="tab-pane fade" id="beverage">
            <?php $menu->DisplayMenu($beverage); ?>
          </div>
        </div>        
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">Freebies</h4>
            <p class="mb-0">
              Appetizer of choice and a pitcher of mineral water (refillable).  
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include "footer.php"; ?>
