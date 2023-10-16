<?php

if (
   !isset($_GET["name"]) ||
   !isset($_GET["food"]) ||
   !isset($_GET["film"]) ||
   !isset($_GET["anime"]) ||
   !isset($_GET["color"])
) {
   header("Location: data.php");
   exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail Data</title>
</head>

<body>

   <ul>
      <li><?= $_GET["name"]; ?></li>
      <li><?= $_GET["food"]; ?></li>
      <li><?= $_GET["film"]; ?></li>
      <li><?= $_GET["anime"]; ?></li>
      <li><?= $_GET["color"]; ?></li>
   </ul>

   <a href="data.php">Kembali Ke Daftar Data</a>

</body>

</html>