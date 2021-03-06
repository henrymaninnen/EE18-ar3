<?php

/**
 * PHP version 7
 * @category   Inloggning
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 */
include "./resurser/conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
        <div class="nav">
          <!-- nav header -->
          <div class="nav-header">
           <h1>DONKEYSOΛP</h1>
          <!-- links -->
          <ul class="links">
            <li>
              <a href="../main/index.html">Hem</a>
            </li>
            <li>
              <a href="../about-us/recensioner.html">Om oss</a>
            </li>
            <li>
              <a href="../inloggning/loggain.php">Logga in</a>
            </li>
            <li>
              <a href="../soap/index.html">tåvlen</a>
            </li>
          </ul>
          <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            </div>
          </div>
          </div>
          
            <nav>
                <ul class="nav nav-tabs">
                    <?php if (isset($_SESSION["anamn"])) { ?>
                        <li class="nav-item"><a class="nav-link active" href="./logout.php">Logga ut</a></li>
                        <li class="nav-item"><a class="nav-link" href="./lista.php">Lista</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link active" href="./login.php">Logga in</a></li>
                        <li class="nav-item"><a class="nav-link" href="./registrera.php">Registrera</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </header>
        <main>
            <form action="#" method="post">
                <label>Användarnamn <input type="text" name="anamn" required></label>
                <label>Lösenord <input type="password" name="lösen" required></label>
                <button>Registrera</button>
            </form>
            <?php
            // Ta emot data och skydda från hot
            $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
            $lösen = filter_input(INPUT_POST, "lösen", FILTER_SANITIZE_STRING);

            // Kontrollera om data finns
            if ($anamn && $lösen) {

                // Finns användaren i tabellen?
                $sql = "SELECT * FROM user WHERE anamn = '$anamn'";
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
                        $sql = "UPDATE user SET antal = '$antal' WHERE id = $rad[id]";
                        $conn->query($sql);
                        $_SESSION["antal"] = $antal;

                        // Hoppa till sidan lista
                        header("Location: ./lista.php");
                    } else {
                        // Fel!
                        echo "<p class=\"alert alert-warning\">Lösenordet stämmer inte!</p>";
                    }
                }
            }
            ?>
        </main>
    </div>
</body>
</html>