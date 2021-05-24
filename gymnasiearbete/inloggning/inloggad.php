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
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <!-- extra fonts -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="inloggad.css">
</head>
<body>
<nav>
        <div class="logo">
            <a href="../main">Donkey soap</a>
        </div>
        <ul class="nav-links">
        <?php if (isset($_SESSION["anamn"])) { ?>
            <li><a href="../tvalen">tvålen</a></li>
            <li><a href="../om-oss">om oss</a></li>
            <li><a href="./logga-ut.php">logga ut</a></li>
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
    <div class="container">
        <?php
       echo "<h1>Välkommen $_SESSION[anamn]</h1>";
        ?>
        <span>VART VILL DU NAVIGERA?</span>
        <div class="button-container">
      <a id="home" href="../main/index.php">HEM</a>
      <a id="home" href="../om-oss/index.php">OM OSS</a>
      <a id="home" href="../tvalen/index.php">TVÅLEN</a>
      </div>
      <a href="logga-ut.php">Klicka här för att logga ut</a>
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
    <script src="./app.js"></script>
</body>
</html>
