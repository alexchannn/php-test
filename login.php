<?php

if (isset($_POST["submit"])) {
   if (($_POST["username"]) == "saya@belajar.php" && ($_POST["password"]) == "tkj") {
      header("Location: admin.php");
      exit;
   } else {
      $error = true;
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>

   <h1>Selamat datang, silahkan Login</h1>

   <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">username atau password anda salah, silahkan coba lagi</p>
   <?php endif; ?>

   <form action="" method="post">
      <li>
         <label for="username">username</label>
         <input type="text" name="username" id="username">
      </li>
      <li>
         <label for="password">password</label>
         <input type="password" name="password" id="password">
      </li>
      <li>
         <button type="submit" name="submit">Login</button>
      </li>
   </form>

</body>

</html>