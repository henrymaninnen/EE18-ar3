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
  <title>Navbar</title>
  <!-- styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <!-- extra fonts -->
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <div class="container-img">
    <div class="container">
    <nav>
            <a id="logo" href="../main">Donkey soap</a>
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
    <div class="hero">
          <h1 id="hero-h1">EN HANDGJORD ANIKTSTVÅL</h1>
          <p id="hero-p">En handskapad aniskitstvål gjord av en liten by i grekland <br> som är gjord på åsnans dyrbara mjölk <br> med
            massor av vitaminer och minrealer</p>
            <a class="hero-btn" href="#questions">Vanliga frågor</a>
        </div>
        </div>
      </nav>

    </div>
  </div>
  <section id="questions">
    <!-- title -->
    <div class="title">
      <h2>Vanliga frågor</h2>
      <div class="underline"></div>
    </div>
    <!-- questions -->
    <div class="section-center">
      <!-- single question -->
      <article class="question">
        <!-- question title -->
        <div class="question-title">
          <p>VART KAN MAN KÖPA DONKEY SOAP?</p>
          <button type="button" class="question-btn">
            <span class="plus-icon">
              <i class="far fa-plus-square"></i>
            </span>
            <span class="minus-icon">
              <i class="far fa-minus-square"></i>
            </span>
          </button>
        </div>
        <!-- question text -->
        <div class="question-text">
          <p>
            Du kan köpa vår tvål genom att kontakta oss via instagram, du kan hitta länken längst ner på webbplatsen
          </p>
        </div>
      </article>
      <!-- end of single question -->
      <!-- single question -->
      <article class="question">
        <!-- question title -->
        <div class="question-title">
          <p>Vad kostar tvålen?</p>
          <button type="button" class="question-btn">
            <span class="plus-icon">
              <i class="far fa-plus-square"></i>
            </span>
            <span class="minus-icon">
              <i class="far fa-minus-square"></i>
            </span>
          </button>
        </div>
        <!-- question text -->
        <div class="question-text">
          <p>
            Tvålen kostar 159kr 
          </p>
        </div>
      </article>
      <!-- end of single question -->
      <!-- single question -->
      <article class="question">
        <!-- question title -->
        <div class="question-title">
          <p>Varför ska man köpa just denna tvål?</p>
          <!-- button -->
          <button type="button" class="question-btn">
            <span class="plus-icon">
              <i class="far fa-plus-square"></i>
            </span>
            <span class="minus-icon">
              <i class="far fa-minus-square"></i>
            </span>
          </button>
        </div>
        <!-- question text -->
        <div class="question-text">
          <p>
            Detta är den enda tvålen som är baserad på åsnans mjölk i hela scandinaven, vi är de första som tar det som är så populärt i andra delar och tar det till scandinaven och den är till ett rimligt pris, ge din hud vad den förtjänar
          </p>
        </div>
      </article>

      <article class="question">
        <!-- question title -->
        <div class="question-title">
          <p>Var och Hur skapas denna tvål?</p>
          <!-- button -->
          <button type="button" class="question-btn">
            <span class="plus-icon">
              <i class="far fa-plus-square"></i>
            </span>
            <span class="minus-icon">
              <i class="far fa-minus-square"></i>
            </span>
          </button>
        </div>
        <!-- question text -->
        <div class="question-text">
          <p>
            Vår tvål kommer från en liten by i norra grekland där den skapas för hand av invånarna i byn.
          </p>
        </div>
      </article>
    </div>


    <!-- end of single question -->
  </section>
  </main>

  <div class="footer">

    <div class="footer-icons">
      <a href="https://www.instagram.com/donkeysoapuf/"><i class="fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com/in/henry-cantwell-65b8091a6/"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.linkedin.com/in/henry-cantwell-65b8091a6/"><i class="fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/in/henry-cantwell-65b8091a6/"><i class="fab fa-linkedin-in"></i></a>
    </div>

    <div class="footer-text">
      <a href="../om-oss/">Om oss</a>
      <a href="https://www.linkedin.com/in/henry-cantwell-65b8091a6/">Kontakta oss</a>
      <a href="https://ungforetagsamhet.se/gymnasiet">läs mer om UF</a> <br>
    </div>
    <p>@Donkey Soap UF</p>
    

  </div>
  <!-- javascript -->
  <script src="app.js"></script>
  <script src="question.js"></script>
</body>
</html>