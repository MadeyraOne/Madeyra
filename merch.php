<?php include 'php/PHOTO_PATH.PHP';?>
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
             <img
             src="img\icons8-download-50.png" alt="">
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

  <div class="popup">
    <div class="popup__container" id="popup_container">
      <div class="popup__item">
        <h1 class="popup__title">Оформление заказа</h1>
      </div>
      <div class="popup__item" id="popup_product_list">
        <div class="popup__product">
          <div class="popup__product-wrap">
            <img
              src="photo\ZIP-HOODIE-FIRE-FIST-FRONT-1-700x932.jpeg"
              alt="Apple IPhone 14 Pro Max 256Gb"
              class="popup__product-image"
            />
            <h2 class="popup__product-title">
              #########
            </h2>
          </div>
          <div class="popup__product-wrap">
            <div class="popup__product-price">35000</div>
            <button class="popup__product-delete">✖</button>
          </div>
        </div>
      </div>
      <div class="popup__item">
        <div class="popup__cost">
          <h2 class="popup__cost-title">Итого</h2>
          <output class="popup__cost-value" id="popup_cost">50000</output>
        </div>
        <div class="popup__cost">
          <h2 class="popup__cost-title">Скидка</h2>
          <output class="popup__cost-value" id="popup_discount">5000</output>
        </div>
        <div class="popup__cost">
          <h2 class="popup__cost-title">Итого со скидкой</h2>
          <output class="popup__cost-value" id="popup_cost_discount"
            >135000</output
          >
        </div>
      </div>
      <button class="popup__close" id="popup_close">✖</button>
    </div>
  </div>
      <!-- Сетка карточек товаров -->
      <div class="cards">
        <div class="card">
          <div class="card__top">
            <a href="#" class="card__image">
              <img
                src="<?php echo $photoPath; ?>"
                alt="Odejda"
              />
            </a>
          </div>
          <div class="card__bottom">
            <div class="card__prices">
              <div class="card__price card__price--discount">3000</div>
              <div class="card__price card__price--common">5000</div>
            </div>
            <a href="#" class="card__title">
              Толстовка
            </a>
            <button class="card__add">В корзину</button>
          </div>
        </div>
        <div class="card">
          <div class="card__top">
            <a href="#" class="card__image">
              <img
                src="<?php echo $photoPath; ?>"
                alt="Odejda"
              />
            </a>
          </div>
          <div class="card__bottom">
            <div class="card__prices">
              <div class="card__price card__price--discount">3500</div>
              <div class="card__price card__price--common">5000</div>
            </div>
            <a href="#" class="card__title">
              Толстовка
            </a>
            <button class="card__add">В корзину</button>
          </div>
        </div>
        <div class="card">
          <div class="card__top">
            <a href="#" class="card__image">
              <img
                src="<?php echo $photoPath; ?>"
                alt="Odejda"
              />
            </a>
          </div>
          <div class="card__bottom">
            <div class="card__prices">
              <div class="card__price card__price--discount">3500</div>
              <div class="card__price card__price--common">5000</div>
            </div>
            <a href="#" class="card__title">
              Толстовка
            </a>
            <button class="card__add">В корзину</button>
          </div>
        </div>
        <div class="card">
          <div class="card__top">
            <a href="#" class="card__image">
              <img
                src="<?php echo $photoPath; ?>"
                alt="Odejda"
              />
            </a>
          </div>
          <div class="card__bottom">
            <div class="card__prices">
              <div class="card__price card__price--discount">5000</div>
              <div class="card__price card__price--common">5000</div>
            </div>
            <a href="#" class="card__title">
              Толстовка
            </a>
            <button class="card__add">В корзину</button>
          </div>
        </div>
        <div class="card">
          <div class="card__top">
            <a href="#" class="card__image">
              <img
                src="<?php echo $photoPath; ?>"
                alt="Odejda"
              />
            </a>
          </div>
          <div class="card__bottom">
            <div class="card__prices">
              <div class="card__price card__price--discount">5000</div>
              <div class="card__price card__price--common">5000</div>
            </div>
            <a href="#" class="card__title">
              Толстовка
            </a>
            <button class="card__add">В корзину</button>
          </div>
        </div>
        <div class="card">
          <div class="card__top">
            <a href="#" class="card__image">
              <img
                src="<?php echo $photoPath; ?>"
                alt="Odejda"
              />
            </a>
          </div>
          <div class="card__bottom">
            <div class="card__prices">
              <div class="card__price card__price--discount">5 000</div>
              <div class="card__price card__price--common">5000</div>
            </div>
            <a href="#" class="card__title">
              Толстовка
            </a>
            <button class="card__add">В корзину</button>
          </div>
        </div>
        <div class="card">
          <div class="card__top">
            <a href="#" class="card__image">
              <img
                src="<?php echo $photoPath; ?>"
                alt="Odejda"
              />
            </a>
          </div>
          <div class="card__bottom">
            <div class="card__prices">
              <div class="card__price card__price--discount">5000</div>
              <div class="card__price card__price--common">5000</div>
            </div>
            <a href="#" class="card__title">
              Толстовка
            </a>
            <button class="card__add">В корзину</button>
          </div>
        </div>
        <div class="card">
          <div class="card__top">
            <a href="#" class="card__image">
              <img
                src="<?php echo $photoPath; ?>"
                alt="Odejda"
              />
            </a>
          </div>
          <div class="card__bottom">
            <div class="card__prices">
              <div class="card__price card__price--discount">5000</div>
              <div class="card__price card__price--common">5000</div>
            </div>
            <a href="#" class="card__title">
              Толстовка
            </a>
            <button class="card__add">В корзину</button>
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
                <img class="telegram"
                src="img/icons8-телеграм-50.png" alt="Facebook Icon">
              </a>
              <a href="#" target="_blank">
                <img class="vk"
                src="img/icons8-vk-50.png" alt="Twitter Icon">
              </a>
              <a href="#" class="instagram" target="_blank">
                <img class="instagram"
                src="img/icons8-instagram-50.png" alt="Instagram Icon">
              </a>
              <h3 class="">Contact</h3>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#banner"
                class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#"
                class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#"
                class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#"
                class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#"
                class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#banner"
                class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#"
                class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#"
                class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#"
                class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#"
                class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>© 2024 Company, Inc. All rights reserved.</p>
      </div>
    </footer>
  </div>
</section>
  <script defer src="js/java.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>
