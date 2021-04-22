<?php

/**
 * PHP version 7
 * @category   Inloggning
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 */
include "./resuser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
    <nav>
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
              <a href="../final/recensioner.html">Om oss</a>
            </li>
            <li>
              <a href="contact.html">Kontakt</a>
            </li>
            <li>
              <a href="contact.html">LOGGA IN</a>
            </li>
            <li>
              <a href="contact.html">REGISTRERA</a>
            </li>



            </ul>
            <!-- ANNAN VARIANT <?php if (isset($_SESSION["user"])) { ?>
                        <li class="nav-item"><a class="nav-link" href="./logout.php">Logga ut</a></li>
                        <li class="nav-item"><a class="nav-link" href="./lista.php">Lista</a></li>
                    <?php } else { ?>
                        <li class="links">
                            <a href="./login.php">Logga in</a>
                        </li>
                        <li class="links">
                            <a href="./registrera.php">Registrera</a>
                        </li>
                    <?php } ?>
                    -->


          
          <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            </div>
        </div>
    </nav>
    <h1>REGISTRERA DIG HOS OSS OCH FÅ  <br>  EXTRAERBJUDANDE</h1>
            <form action="#" method="post">
                <label>Användarnamn <input type="text" name="anamn" required></label>
                <label>Lösenord <input type="password" name="hash" required></label>
                <label>Email<input type="password" name="mail" required></label>
                <button>Registrera</button>
            </form>
            <?php
            // Ta emot data och skydda från hot
            $anamn = filter_input(INPUT_POST, "user", FILTER_SANITIZE_STRING);
            $hash = filter_input(INPUT_POST, "hash", FILTER_SANITIZE_STRING);

            // Kontrollera om data finns
            if ($anamn && $hash) {

                // Kontrollera att användarnamnet inte redan finns!
                $sql = "SELECT * FROM user WHERE user = '$anamn'";
                $result = $conn->query($sql);

                // Om användarnamnet inte finns skriv ut en varning
                if ($result->num_rows != 0) {
                    echo "<p class=\"alert alert-warning\">Användarnamnet finns redan, vg försök igen!</p>";
                } 
            }
            ?>
    </div>
</body>
</html>