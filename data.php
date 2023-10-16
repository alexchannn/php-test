<?php

$data = [
   [
      "name" => "Alpha",
      "food" => "Burger",
      "film" => "The Avengers",
      "anime" => "Naruto",
      "color" => "Red"
   ],
   [
      "name" => "Beta",
      "food" => "Pizza",
      "film" => "Oppenheimer",
      "anime" => "Bleach",
      "color" => "Green"
   ],
   [
      "name" => "Gamma",
      "food" => "Taco",
      "film" => "Barbie",
      "anime" => "Kimi No Nawa",
      "color" => "Blue"
   ],
   [
      "name" => "Delta",
      "food" => "Sushi",
      "film" => "Jumanji",
      "anime" => "Tenki No Ko",
      "color" => "Black"
   ],
   [
      "name" => "Epsilon",
      "food" => "Ramen",
      "film" => "Titanic",
      "anime" => "Suzume No Tojimari",
      "color" => "White"
   ]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GET</title>
</head>

<body>

   <h1>Daftar Data</h1>

   <ul>
      <?php foreach ($data as $dt) : ?>
         <li>
            <a href="detail.php?name=<?= $dt["name"]; ?>&food=<?= $dt["food"]; ?>&film=<?= $dt["film"]; ?>&anime=<?= $dt["anime"]; ?>&color=<?= $dt["color"]; ?>"><?= $dt["name"]; ?></a>
         </li>
      <?php endforeach; ?>
   </ul>

</body>

</html>