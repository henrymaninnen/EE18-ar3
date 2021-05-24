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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Starter</title>
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- styles -->
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <nav>
        <div class="logo">
            <a href="../main/">Donkey soap</a>
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

          
    <div class="container"> 
        <!-- title -->
        <div class="title">
          <h2>VILLKA ÄR VI?</h2>
          <div class="underline"></div>
        </div>
        <!-- review -->
        <article class="review">
          <div class="img-container">
            <img src="https://media-exp1.licdn.com/dms/image/C5635AQHSbi38aLmF3w/profile-framedphoto-shrink_400_400/0/1620289387512?e=1620388800&v=beta&t=oBZfv3WwwVsNZvAPfKvJgt2GAiO0IHLpK5Kt2-xj_wQ" id="person-img" alt="" />
          </div>
          <h4 id="author">Henry Cantwell</h4>
          <p id="job">Web designer</p>
          <p id="info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
            asperiores debitis incidunt, eius earum ipsam cupiditate libero?
            Iste, doloremque nihil?
          </p>
          <!-- prev next buttons-->
          <div class="button-container">
            <button class="prev-btn">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="next-btn">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </article>
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
    <!-- javascript -->
    <script src="app.js"></script>
    <script src="nav.js"></script>
  </body>
</html>
