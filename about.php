<?php

  $title = "About";
  $current_page = "about";
  include "head.php";
  include "navigation.php";

?>

<body>
  <div class="container pt-5">
    <h1 class="mt-5 mb-4 pb-3 border-bottom">About</h1>
    <div class="row featurette">
      <div class="col-md-7">
        <h3 class="featurette-heading">The Team.</h3>
        <p class="lead">
          We are Information Technology students from University of Santo Tomas,
          specializing in Web and Mobile Development.
        </p>
        <h6>Carl Dagañgon</h6>
        <p>
          Advanced knowledge in Programming languages such as Java, JavaScript, 
          PHP, Python, React Native Framework. Loves the beach, watch tv series and playing games.
        </p>
        <p>
          <a
            href="https://www.linkedin.com/in/carldagañgon"
            class="link-secondary"
            >LinkedIn</a
          >
          |
          <a href="https://github.com/cndagangon" class="link-secondary">GitHub</a>
        </p>
        <h6>Louisse Evale</h6>
        <p>
          Proficient in Javascript frameworks for building websites and mobile
          applications such as React and Angular. Interests include watching
          movies, listening to music, and playing online games.
        </p>
        <p>
          <a
            href="https://www.linkedin.com/in/louisseevale/"
            class="link-secondary"
            >LinkedIn</a
          >
          |
          <a href="https://github.com/uisselo" class="link-secondary">GitHub</a>
        </p>
        <h6>Hazel Yu</h6>
        <p>
          Proficient in Javascript frameworks for building websites and mobile
          applications such as React and Angular. Interests include watching
          movies, listening to music, and playing online games.
        </p>
      </div>
      <div class="col-md-5">
        <img
          class="featurette-image img-fluid mx-auto"
          width="500"
          height="500"
          src="./assets/images/1.png"
        />
      </div>
    </div>
  </div>
</body>

<?php include "footer.php"; ?>
