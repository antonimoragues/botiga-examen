<?php

$cart = array (
    array("codi"=>"3", "unitats"=>"1", "preu"=>"20"),
    array("codi"=>"2", "unitats"=>"1", "preu"=>"40"),
    array("codi"=>"30", "unitats"=>"2", "preu"=>"15")
);

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
      <div class="col-sm-10">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Codi</th>
                <th scope="col">Nom</th>
                <th scope="col">Unitats</th>
                <th scope="col">Preu</th>
              </tr>
            </thead>
            <tbody>

              <?php for($x = 0; $x < count($cart); $x++) { ?>
                  
              <tr>
                  <td> <?= $cart[$x]['codi'] ?></td>
                  <td>NOM</td>
                  <td><?= $cart[$x]['unitats'] ?></td>
                  <td><?= $cart[$x]['preu'] ?></td>
              </tr>

              <?php } ?>
      </tbody>
    </table>
            </div>
        </div>
    </div>
    
</body>
</html>
  

