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
        <a href="" class="cart" id="cart">
          <img src="img\icons8-корзина-96.png" alt="" >
        </a>
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

  <div class="popup">
  <div class="popup__container" id="popup_container">
    <div class="popup__item">
      <h1 class="popup__title">Оформление заказа</h1>
    </div>
    <div class="popup__item" id="popup_product_list">
      <div class="popup__product">
        <div class="popup__product-wrap">
          <img
            src="Jellyfish.jpg"
            alt="Apple IPhone 14 Pro Max 256Gb"
            class="popup__product-image"
          />
          <h2 class="popup__product-title">
            Смартфон Apple IPhone 14 Pro Max 256Gb, золотой
          </h2>
        </div>
        <div class="popup__product-wrap">
          <div class="popup__product-price">135000</div>
          <button class="popup__product-delete">✖</button>
        </div>
      </div>
    </div>
    <div class="popup__item">
      <div class="popup__cost">
        <h2 class="popup__cost-title">Итого</h2>
        <output class="popup__cost-value" id="popup_cost">150000</output>
      </div>
      <div class="popup__cost">
        <h2 class="popup__cost-title">Скидка</h2>
        <output class="popup__cost-value" id="popup_discount">15000</output>
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

<div class="pusto"></div>


<div class="cards">
      <div class="card">
        <div class="card__top">
          <a href="#" class="card__image">
            <img
              src="photo\ZIP-HOODIE-FIRE-FIST-FRONT-1-700x932.jpeg  "
              alt="Apple IPhone 14 PRO Max Gold"
            />
          </a>
          <button class="card__like"></button>
          <div class="card__label">-10%</div>
        </div>
        <div class="card__bottom">
          <div class="card__prices">
            <div class="card__price card__price--discount">135 000</div>
            <div class="card__price card__price--common">150 000</div>
          </div>
          <a href="#" class="card__title">
            Смартфон Apple IPhone 14 Pro Max 256Gb, золотой
          </a>
          <button class="card__add">В корзину</button>
        </div>
        <div class="card">
          <div class="card__top">
            <a href="#" class="card__image">
              <img
                src="photo\ZIP-HOODIE-FIRE-FIST-FRONT-1-700x932.jpeg  "
                alt="Apple IPhone 14 PRO Max Gold"
              />
            </a>
            <button class="card__like"></button>
            <div class="card__label">-10%</div>
          </div>
          <div class="card__bottom">
            <div class="card__prices">
              <div class="card__price card__price--discount">135 000</div>
              <div class="card__price card__price--common">150 000</div>
            </div>
            <a href="#" class="card__title">
              Смартфон Apple IPhone 14 Pro Max 256Gb, золотой
            </a>
            <button class="card__add">В корзину</button>
          </div>
      </div>

  <script defer src="js\java.js">
  </script>
<script>
function toNum(str) {
const num = Number(str.replace(/ /g, ""));
return num;
}

function toCurrency(num) {
const format = new Intl.NumberFormat("ru-RU", {
  style: "currency",
  currency: "RUB",
  minimumFractionDigits: 0,
}).format(num);
return format;
}

const cardAddArr = Array.from(document.querySelectorAll(".card__add"));
const cartNum = document.querySelector("#cart_num");
const cart = document.querySelector("#cart");
const popup = document.querySelector(".popup");
const popupClose = document.querySelector("#popup_close");
const body = document.body;
const popupContainer = document.querySelector("#popup_container");
const popupProductList = document.querySelector("#popup_product_list");
const popupCost = document.querySelector("#popup_cost");
const popupDiscount = document.querySelector("#popup_discount");
const popupCostDiscount = document.querySelector("#popup_cost_discount");

cart.addEventListener("click", (e) => {
  e.preventDefault();
  popup.classList.add("popup--open");
  body.classList.add("lock");
});

popupClose.addEventListener("click", (e) => {
  e.preventDefault();
  popup.classList.remove("popup--open");
  body.classList.remove("lock");
});



class Product {
  imageSrc;
  name;
  price;
  constructor(card) {
    this.imageSrc = card.querySelector(".card__image").children[0].src;
    this.name = card.querySelector(".card__title").innerText;
    this.price = card.querySelector(".card__price--common").innerText;
    this.priceDiscount = card.querySelector(".card__price--discount").innerText;
  }
}


const cardAddArr = Array.from(document.querySelectorAll(".card__add"));
const cartNum = document.querySelector("#cart_num");

class Cart {
  products;
  constructor() {
    this.products = [];
  }
  get count() {
    return this.products.length;
  }
  addProduct(product) {
    this.products.push(product);
  }
  removeProduct(index) {
    this.products.splice(index, 1);
  }
  get cost() {
    const prices = this.products.map((product) => {
      return toNum(product.price);
    });
    const sum = prices.reduce((acc, num) => {
      return acc + num;
    }, 0);
    return sum;
  }
  get costDiscount() {
    const prices = this.products.map((product) => {
      return toNum(product.priceDiscount);
    });
    const sum = prices.reduce((acc, num) => {
      return acc + num;
    }, 0);
    return sum;
  }
  get discount() {
    return this.cost - this.costDiscount;
  }
}

const myCart = new Cart();

if (localStorage.getItem("cart") == null) {
  localStorage.setItem("cart", JSON.stringify(myCart));
}

const savedCart = JSON.parse(localStorage.getItem("cart"));
myCart.products = savedCart.products;
cartNum.textContent = myCart.count;



myCart.products = cardAddArr.forEach((cardAdd) => {
  cardAdd.addEventListener("click", (e) => {
    e.preventDefault();
    const card = e.target.closest(".card");
    const product = new Product(card);
    const savedCart = JSON.parse(localStorage.getItem("cart"));
    myCart.products = savedCart.products;
    myCart.addProduct(product);
    localStorage.setItem("cart", JSON.stringify(myCart));
    cartNum.textContent = myCart.count;
  });
});


function popupContainerFill() {
  popupProductList.innerHTML = null;
  const savedCart = JSON.parse(localStorage.getItem("cart"));
  myCart.products = savedCart.products;
  const productsHTML = myCart.products.map((product) => {
    const productItem = document.createElement("div");
    productItem.classList.add("popup__product");

    const productWrap1 = document.createElement("div");
    productWrap1.classList.add("popup__product-wrap");
    const productWrap2 = document.createElement("div");
    productWrap2.classList.add("popup__product-wrap");

    const productImage = document.createElement("img");
    productImage.classList.add("popup__product-image");
    productImage.setAttribute("src", product.imageSrc);

    const productTitle = document.createElement("h2");
    productTitle.classList.add("popup__product-title");
    productTitle.innerHTML = product.name;

    const productPrice = document.createElement("div");
    productPrice.classList.add("popup__product-price");
    productPrice.innerHTML = toCurrency(toNum(product.priceDiscount));

    const productDelete = document.createElement("button");
    productDelete.classList.add("popup__product-delete");
    productDelete.innerHTML = "✖";

    productDelete.addEventListener("click", () => {
      myCart.removeProduct(product);
      localStorage.setItem("cart", JSON.stringify(myCart));
      popupContainerFill();
    });

    productWrap1.appendChild(productImage);
    productWrap1.appendChild(productTitle);
    productWrap2.appendChild(productPrice);
    productWrap2.appendChild(productDelete);
    productItem.appendChild(productWrap1);
    productItem.appendChild(productWrap2);

    return productItem;
  });

  productsHTML.forEach((productHTML) => {
    popupProductList.appendChild(productHTML);
  });

  popupCost.value = toCurrency(myCart.cost);
  popupDiscount.value = toCurrency(myCart.discount);
  popupCostDiscount.value = toCurrency(myCart.costDiscount);
}
</script>

</body>

</html>
