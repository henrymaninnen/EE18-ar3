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
            <h1>Registrera dig</h1>
            <div class="grid">
                <div class="form-div">
                    <form action="#" method="post">
                        <input type="text" name="username" placeholder="Ditt användarnamn...">
                        <input type="text" name="email" placeholder="Din email...">
                        <input type="password" name="password" placeholder="Lösenord...">
                        <input type="password" name="passwordrpt" placeholder="Upprepa lösenord">
                        <button type="submit">Registrera</button>
                        <a href="">Har du redan ett konto? Logga in här!</a>
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
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
        $pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
        $passrpt = filter_input(INPUT_POST, "passwordrpt", FILTER_SANITIZE_STRING);

        // Kontrollera om data finns
        if ($username && $email && $pass && $passrpt) {

            if ($pass == $passrpt) {
                var_dump($username, $email, $pass, $passrpt);
                //skapa hash från lösenordet
                $hash = password_hash($pass, PASSWORD_DEFAULT);

                // Kontrollera att användarnamnet inte redan finns!
                $sql = "SELECT * FROM inloggning WHERE user = '$username'";
                $result = $conn->query($sql);

                // Om användarnamnet finns skriv ut en varning
                if ($result->num_rows != 0) {
                    echo "<p class=\"alert alert-warning\">Användarnamnet finns redan, vg försök igen!</p>";
                } else {
                    $sql = "INSERT INTO inloggning (user, email, hash) VALUES ('$username', '$email', '$hash')";
                     echo "<p>$sql</p>";
                      $result = $conn->query($sql);
                     
                     echo "<p>Användarnamnet har lagrats</p>";
                }
            } else {
                echo "<p>Inte samma lösenord</p>";
            }
        }
        //stänger ned anslutningen
        $conn->close();

        ?>
    </div>
    <script src="./app.js"></script>
</body>
</html>