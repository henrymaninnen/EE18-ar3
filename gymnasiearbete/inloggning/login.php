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
    <link rel="stylesheet" href="logg.css">
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
        <div class="register-box">
            <h1>Logga in</h1>
            <div class="grid">
                <div class="form-div">
                    <form action="#" method="post">
                        <input type="text" name="anamn" placeholder="Användarnamn...">
                        <input type="password" name="lösen" placeholder="Lösenord...">
                        <button type="submit">Logga in</button>
                        <a href="./regga.php">Har du inget ett konto? Skaffa ett här!</a>
                    </form>
                </div>
                <img src="./undraw_Login_re_4vu2.svg" alt="">
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
        <?php
            // Ta emot data och skydda från hot
            $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $lösen = filter_input(INPUT_POST, "lösen", FILTER_SANITIZE_STRING);

            // Kontrollera om data finns
            if ($anamn && $lösen) {

                // Finns användaren i tabellen?
                $sql = "SELECT * FROM inloggning WHERE user = '$anamn'";
                $result = $conn->query($sql);

                if ($result->num_rows == 0) {
                    echo "<p class=\"alert alert-warning\">Användaren finns inte, vg försök igen!</p>";
                } else {

                    // Plocka ut hashet för användaren
                    $rad = $result->fetch_assoc();
                    $hash = $rad["hash"];

                    // Kontrollera lösenordet
                    if (password_verify($lösen, $hash)) {

                        // Inloggad!
                        echo "<p class=\"alert alert-success\">Du är inloggad!</p>";

                        // Skapa en sessionsvariabel
                        $_SESSION["anamn"] = $anamn;

                        // Räkna antal
                        $antal = $rad['antal'] + 1;

                        // Registrera ny inloggning
                        $sql = "UPDATE inloggning SET antal = '$antal' WHERE id = $rad[id]";
                        $conn->query($sql);
                        $_SESSION["antal"] = $antal;
                        $_SESSION["anamn"] = $anamn;

                        // Hoppa till sidan lista
                        header("Location: inloggad.php");
                    } else {
                        // Fel!
                        echo "<p class=\"alert alert-warning\">Lösenordet stämmer inte!</p>";
                    }
                }
            }
            ?>
    </div>
    <script src="./app.js"></script>
    <script>
        const a = document.querySelector("")
        a.addEventListener("click", function() {
            
        })
    </script>
</body>
</html>