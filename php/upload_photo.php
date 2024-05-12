<?php
if (isset($_FILES["photo"])){
    try {
    $targetDirectory = "C:/xampp/htdocs/html/photo/";
    $targetFile = $targetDirectory . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);
    $relativePath = str_replace("C:/xampp/htdocs", "", $targetFile);
    $db_host = "localhost";
    $db_user = "user";
    $db_password = "123";
    $db_base = 'products';
    $db_table = "photos";
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    $stmt = $pdo->prepare("INSERT INTO photos (photo_path) VALUES (?)");
    $stmt->execute([$relativePath]);
    echo "OK";
    }
    catch (PDOException $e) {
            var_dump("Ошибка!: " . $e->getMessage(), $e->getTrace());
    }
  }
?>
