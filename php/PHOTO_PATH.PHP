
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="php/upload_photo.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo">
        <input type="submit" value="Upload">
    </form>
    <?php
    $db_host = "localhost";
    $db_user = "user";
    $db_password = "123";
    $db_base = 'products';
    $db_table = "photos";

    $pdo = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    $stmt = $pdo->prepare("SELECT photo_path FROM $db_table ORDER BY id DESC LIMIT 1");
    $stmt->execute();
    $row = $stmt->fetch();
    $photoPath = $row['photo_path'];
    ?>
<?php echo $photoPath; ?>


  </body>
</html>
