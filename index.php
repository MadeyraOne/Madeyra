
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>html + css</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header_inner">
        <button class="cart" id="cart">
             <img class="cart__image"
             src="img\icons8-корзина-96.png" alt="Cart" />
             <div class="cart__num" id="cart_num">0</div>
        </button>
        <a href="3.php" class="download">
          <img src="img\icons8-download-50.png" alt="">
        </a>
        <a href="index.php">
        <div class="header_logo">LOGO</div>
        </a>
        <nav class="nav">
          <a href="#section-1" class="nav_link">About</a>
          <a href="2.php" class="nav_link">Merch</a>
          <a href="#section-3" class="nav_link">Work</a>
          <a href="#footer" class="nav_link">Contact</a>
        </nav>



        <div class="burger">
          <span></span>
        </div>
      </div>
    </div>

  </header>

  <div  id="banner"  class="intro">
    <div class="container_my">
      <a href="#">
        <img class="intro" src="https://nikifilini.com/wp-content/uploads/2024/01/DSC0s2v313_LEAD_banners_28.12.23-1536x1024.jpg" alt="cloth_main_banner">
      </a>
    </div>
  </div>

  <div class="banner">
    <div class="container">
      <a href="#">
        <img class="banner1" src="https://nikifilini.com/wp-content/uploads/2023/04/otaku5-768x512.webp" alt="cloth_main_banner">
        <img class="banner2" src="https://nikifilini.com/wp-content/uploads/2022/12/ART-NEW1-mobile-banner-min-768x512.jpg" alt="cloth_main_banner">
      </a>
    </div>
  </div>
  <div class="container2">
    <div class="slider-wrapper">
      <button id="prev-slide" class=" prev-slide slide-button material-symbols-outlined">chevron_left</button>
      <div class="image-list">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
        <img src="https://nikifilini.com/wp-content/uploads/2024/02/8_hero_look-768x1082.jpg" alt="#" class="image-item">
      </div>
      <button id="next-slide" -slide class="prev-slide slide-button material-symbols-outlined">chevron_right</button>
    </div>
  </div>
  </div>
  </div>

  <section id="footer">
    <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-md-4">
          <div class="social-icons">
              <a href="#" target="_blank">
                <img class="telegram" src="img/icons8-телеграм-50.png" alt="Facebook Icon">
              </a>
              <a href="#" target="_blank">
                <img class="vk" src="img/icons8-vk-50.png" alt="Twitter Icon">
              </a>
              <a href="#" class="instagram" target="_blank">
                <img class="instagram" src="img/icons8-instagram-50.png" alt="Instagram Icon">
              </a>
              <h3 class="">Contact</h3>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#banner" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#banner" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>© 2024 Company, Inc. All rights reserved.</p>
      </div>
    </footer>
  </div>
</section>



  <script defer src="js\java.js">
  </script>

</body>

</html>
