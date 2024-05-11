<?php
  if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['overview'])) {
      // Переменные с формы
    $name = $_POST['name'];
    $price = $_POST['price'];
    $overview = $_POST['overview'];

    $db_host = "localhost";
    $db_user = "user";
    $db_password = "123";
    $db_base = 'products';
    $db_table = "products";

    try {
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        $db->exec("set names utf8");
        $query = $db->prepare("INSERT INTO $db_table (name, price, overview) VALUES (:name, :price, :overview)");
        $data = array('name' => $name, 'price' => $price, 'overview' => $overview);
        $query->execute($data);
        $result = true;
    } catch (PDOException $e) {
        var_dump("Ошибка!: " . $e->getMessage(), $e->getTrace());
    }

    if ($result) {
        echo "Успех. Информация занесена в базу данных";
    }
}
?>
