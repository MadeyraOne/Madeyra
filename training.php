
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="GetUserNumber" method="post">
       <input type="text" name="userValue" /><br />
      <input type="submit" name="submit" value="отправить" />
    </form>
  </body>
<script>
  document.getElementById("GetUserNumber").addEventListener("submit", function(event) {
    event.preventDefault();
    const Form2Data = new FormData(document.getElementById('GetUserNumber'));
    fetch('training.php', {
      method: "POST",
      body: Form2Data
    })
    .then(response => {
      if(response.ok) {
         return response.text();
      }
      throw new Error("Network response was not ok.");
    })
    .then(data => {
      console.log(data);
    })
    .catch(error => {
      console.error("where was a problem", error);
    });
  });
</script>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userValue = $_POST["userValue"];
  function binSearch( $list, $value ) {
    $lowIndex = 0;
    $highIndex = sizeof($list) - 1;
    while ( $lowIndex <= $highIndex ) {
      $middleIndex = round(( $lowIndex + $highIndex ) / 2);
      $test = $list[$middleIndex];
      if ($test == $value) {
        return $middleIndex;
      }
      elseif ($test > $value) {
        $highIndex = $middleIndex - 1;
      }
      else {
        $lowIndex = $middleIndex + 1;
      }
    }
    return "не найдено";
  }
  $sampleList = [4, 8, 15, 16, 23, 42];
  echo binSearch( $sampleList, $userValue );
}
?>
