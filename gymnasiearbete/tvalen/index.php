<?php

/**
 * PHP version 7
 * @category   Inloggning
 * @author     Henry Cantwell <cantwellhenry61@gmail.com>
 * @license    PHP CC
 */
include "./resuser/conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <!-- styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <!-- extra fonts -->
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css" />
</head>
<body>
  <div class="container">
  <nav>
        <div class="logo">
            <a href="../main">Donkey soap</a>
        </div>
        <ul class="nav-links">
        <?php if (isset($_SESSION["anamn"])) { ?>
            <li><a href="../tvalen">tvålen</a></li>
            <li><a href="../om-oss">om oss</a></li>
            <li><a href="../inloggning/logga-ut.php">logga ut</a></li>
            <?php } else { ?>
                <li><a href="../tvalen">tvålen</a></li>
            <li><a href="../om-oss">om oss</a></li>
            <li><a href="../inloggning/login.php">logga in</a></li>
                <?php } ?>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

  </div>
  <div class="img-container">
    <div class="div-img">

    </div>
    <div class="img-text">
      <h1>Donkey soap</h1>
      <h2>169kr</h2>
      <p>HANDGJORD AV GREKISKA BÖNDER OCH RIK PÅ VITAMINER OCH MINREALER, PH-VÄRDE LIKT DIN HUD SOM INTE GÖR DIN HUD TORR EFTER ANVÄNDING.</p>
      <div class="check-marks">
        <div class="check-mark-item">
        <p><i class="fas fa-check"></i> effektiv mot akne & finnar</p>
      </div>
        <div class="check-mark-item">
        <p><i class="fas fa-check"></i>rengör huden på djupet</p>
      </div>
        <div class="check-mark-item">
       <p><i class="fas fa-check"></i>  100% organsik</p>
      </div>
        <div class="check-mark-item">
        <p><i class="fas fa-check"></i>  handgjord tvål</p>
      </div>
        <div class="check-mark-item">
       <p> <i class="fas fa-check"></i>  100% Ekologisk</p>
      </div>
      </div>
    </div>
  </div>
  <div class="footer">

  <div class="footer-icons">
      <a href="https://www.instagram.com/donkeysoapuf/"><i class="fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com/in/henry-cantwell-65b8091a6/"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.linkedin.com/in/henry-cantwell-65b8091a6/"><i class="fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/henry-cantwell-65b8091a6/"><i class="fab fa-linkedin-in"></i></a>
    </div>

    <div class="footer-text">
      <a href="../om-oss/">Om oss</a>
      <a href="https://www.linkedin.com/in/henry-cantwell-65b8091a6/"">Kontakta oss</a>
      <a href="https://ungforetagsamhet.se/gymnasiet">läs mer om UF</a> <br>
    </div>
    <p>@Donkey Soap UF</p>
  </div>
  <script src="app.js"></script>
</body>
</html>