<?php
    session_start();
    $_SESSION['autenticado'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/css/all.css"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <!-- <link rel="stylesheet" href="../src/components/index.css"> -->
    <link rel="stylesheet" href="src/components/index.css">
    <title>Mylove</title>
    <!-- <link rel="shortcut icon" href="../img/Myloveps.png"> -->
    <link rel="shortcut icon" href="src/assets/img/Marca.png" sizes="32x32" type="image/png">
    <!-- <script src="../src/scripts/mobileNavBar.js"> </script> -->
    <script src="src/assets/scripts/mobileNavBar.js"> </script>
</head>
<body>
    <nav class="navbar is-black" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="#">
            <!-- <img src="../img/marca-removebg-preview.png" width="112" height="180"> -->
            <img src="src/assets/img/marca-removebg-preview.png" width="112" height="180">
          </a>
      
          <a role="button" id="burguerButton" class="navbar-burger" onclick="mobile()">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarDesktop" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
              
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>
              <div class="navbar-dropdown">
                <a class="navbar-item">
                  About
                </a>
                <a class="navbar-item">
                  Contact
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <!-- <a class="button is-danger" href="../src/pages/sign.php"> -->
                <a class="button is-danger" href="src/assets/validation/sign.php">
                  <strong>Sign up</strong>
                </a>
                <!-- <a class="button is-danger" href=".././src/pages/login.php">  -->
                <a class="button is-danger" href="src/assets/validation/login.php"> 
                  Log in
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <header>
        <div class="wrapper is-hidden-mobile">
          <div class="writting">
            MyLove is the best app for search relaceships and friendships.
          </div>
        </div>
      </header>
      <header>
        <div class="wrapper is-hidden-desktop">
          <div class="writting">
            MyLove the App from moment.
          </div>
        </div>
      </header>
      <main>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, cum. Voluptate, est provident veniam tenetur ex sint commodi obcaecati consectetur recusandae perferendis excepturi, ullam iure dolor quae similique beatae sit.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui asperiores recusandae deleniti doloremque expedita odio temporibus ducimus fugit voluptas quam? Illo eaque, ut tenetur vero non repellendus exercitationem doloremque rem!
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae eveniet, ratione cum libero rerum, ab magnam atque alias, illo at inventore vitae voluptate nulla delectus consequatur iste ullam quae? Facere.
        </p>
        <!-- <img src="../img/icone.png" alt=""> -->
        <img src="src/assets/img/icone.png" alt="">
      </main>

      <section>
        <div class="columns">
          <div class="column">
            <!-- <img src="../img/Find love.jpg" height="550"> -->
            <img src="src/assets/img/Find love.jpg" height="550">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae suscipit, necessitatibus illum voluptatem deleniti quia quasi voluptatibus aliquid at pariatur placeat tempora beatae alias ea qui consequatur earum. Sint, vel.</p>
          </div>
          <div class="column">
            <!-- <img src="../img/hands.jpg" alt=""> -->
            <img src="src/assets/img/hands.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem temporibus quia voluptas voluptatem est eveniet saepe eius eos inventore repudiandae, facere nam deleniti tempora eaque dicta? Et ipsum exercitationem alias?</p>
          </div>
          <div class="column">
            <!-- <img src="../img/Old lovers.jpg" alt=""> -->
            <img src="src/assets/img/Old lovers.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel hic reiciendis culpa aliquam nihil mollitia natus eveniet veritatis animi sit, cumque facere similique repellendus voluptatem ducimus tempore architecto quae deserunt?</p>
          </div>
          <div class="column">
            <!-- <img src="../img/people.jpg" alt=""> -->
            <img src="src/assets/img/people.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, laborum possimus! Architecto officiis impedit eum modi quas cum quidem porro, esse, ex ad veritatis ipsa quasi et omnis id ut?</p>
          </div>
        </div>
      </section>
</body>
</html>