<?php include 'php/PHOTO_PATH.PHP'; ?>
<?php include 'php/conection.php'; ?>

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
        <a href="cart.php" id="cart"  class="cart">
          <img src="img\icons8-корзина-96.png" alt="">
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


  <div class="pusto">

  </div>


  <div class="col-md-1 card-container">
    <div class="product">
      <div class="image" data-id="01">
        <a href="#"><img width="50%" height="50%" src="<?php echo $photoPath; ?>" alt=""></a>
        <div class="kol-vo">
          <button class="minus" type="button" data-id="qwe-" name="button">-</button>
          <input type="text" name="kol-vo2" maxlength="256" placeholder="1" style="width: 50px">
          <button  class="plus" type="button" data-id="qwe+" name="button">+</button>
        </div>
        <div class="add" data-cart>
          <a><span><ion-icon name="cart-outline"></ion-icon></span></a>
        </div>
      </div>
      <div class="image" data-id="01">
        <a href="#"><img width="50%" height="50%" src="<?php echo $photoPath; ?>" alt=""></a>
        <div class="kol-vo">
          <button class="minus" type="button" data-id="qwe-" name="button">-</button>
          <input type="text" name="kol-vo2" maxlength="256" placeholder="1" style="width: 50px">
          <button  class="plus" type="button" data-id="qwe+" name="button">+</button>
        </div>
        <div class="add" data-cart>
          <a><span><ion-icon name="cart-outline"></ion-icon></span></a>
        </div>
      </div>
    </div>
  </div>





  <script>
  let plusButtons = document.querySelectorAll('.plus');
  let minusButtons = document.querySelectorAll('.minus');

  // Обработчик события для кнопки "plus"
  plusButtons.forEach(button => {
    button.addEventListener('click', () => {
      let input = button.parentElement.querySelector('input');
      let value = parseInt(input.value) || 0; // Получаем значение из input или устанавливаем 0, если значение некорректное
      input.value = value + 1;
    });
  });

  // Обработчик события для кнопки "minus"
  minusButtons.forEach(button => {
    button.addEventListener('click', () => {
      let input = button.parentElement.querySelector('input');
      let value = parseInt(input.value) || 0;
      if (value > 0) {
        input.value = value - 1;
      }
    });
  });

  </script>


  <script defer src="js/java.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
