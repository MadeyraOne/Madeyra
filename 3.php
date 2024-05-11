<!DOCTYPE html>
<?php include 'php/conection.php'; ?>
<?php include 'php/PHOTO_PATH.php'; ?>
<?php include 'php/upload_photo.php'; ?>
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
        <a href="3.php" class="cart" id="cart">
          <img src="img\icons8-корзина-96.png" alt="">
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
<body>
  <form class="sql_form" method="POST" action="" enctype="multipart/form-data" onsubmit="submitForms()">
      <input name="name" class="sql_cart" type="text" placeholder="Название"/><br><br>
      <input name="price" class="sql_cart" type="text" placeholder="Стоимость"/><br><br>
      <textarea name="overview" name="sql_cart"  placeholder="Описание"></textarea><br><br>
      <input type="file" name="photo">
      <input type="submit" value="Отправить"><br><br>
  </form>

  <script>
  function submitForms() {
      let form2Data = new FormData(document.querySelector('form[action="php/upload_photo.php"]'));
          fetch('php/upload_photo.php', {
              method: 'POST',
              body: form2Data
          }).then(response => {
              if (response.ok) {
                  return response.text();
              }
              throw new Error('Нет ответа от сервера');
          }).then(result => {
              console.log(result);
          }).catch(error => {
              console.log('Ошибка отправки формы: ', error.message);
          });

      return false;
  }


  </script>
</body>
