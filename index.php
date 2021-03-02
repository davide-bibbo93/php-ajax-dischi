<!-- Il php dedicato al frontend (alla view) -->

<!-- Qui a questo punto possiamo creare (per la prima milestone) tutto il nostro html e ciclare i nostri dischi (sempre in php)
e stampare copertina, titolo e così via, come da screenshot. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>php-ajax-dischi</title>
  </head>
  <body>

    <header>
      <img src="img/logo.png" alt="logo">
    </header>

    <?php
      // per la prima milestone
      require_once __DIR__ . '/database/database.php';
    ?>

    <main>
      <div class="container">
        <ul>
          <?php

          foreach ($discs as $key => $disc) {
            ?>

            <li>
              <img src="<?php echo $disc['poster'] ?>" alt="poster">
              <h2><?php echo $disc['title']; ?></h2>
              <h4><?php echo $disc['author'] ?></h4>
              <h4><?php echo $disc['year'] ?></h4>
              <h4><?php echo $disc['genre'] ?></h4>
            </li>

            <?php
          }

           ?>
        </ul>
      </div>

  </body>
</html>
