<?php
$servername = "localhost";
$username = "admin";
$password = "secret";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nom FROM productes";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">

    <?php  while($row = $result->fetch_assoc()) {
    ?>

      <div class="col-sm-3">
        <img src="img/<?= $row["id"] ?>.jpg" alt="" class="img-fluid">
        <p class="h3 text-centered"><?= $row["nom"] ?></p>
        <p class="h4 text-centered"><?= $row["preu"] ?></p>
      </div>

      <?php  }
    ?>

    </div>

  </div>
</body>
</html>

<?php

$conn->close();
?>