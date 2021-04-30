<?php

/**
 * PHP version 7
 * @category   Inloggning
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 */
include "./gymnasiearbete/inloggning/resuser/conn.php";
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <a href="../main">Donkey soap</a>
            </div>
            <ul class="nav-links">
                <li><a href="../tvalen">tvålen</a></li>
                <li><a href="../om-oss">om oss</a></li>
                <li><a href="../inloggning/loggain.php">logga in</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

        <div class="register-box">
            <h1>Registrea dig</h1>
            <div class="grid">
                <div class="form-div">
                    <form action="loggain-test.php" method="post">
                        <input type="text" name="username" placeholder="Ditt användarnamn...">
                        <input type="text" name="email" placeholder="Din email...">
                        <input type="text" name="password" placeholder="Lösenord...">
                        <input type="text" name="passwordrpt" placeholder="Upprepa lösenord">
                        <button type="submit">Registrera</button>
                    </form>
                </div>
                <img src="./undraw_Login_re_4vu2.svg" alt="">
            </div>
        </div>
    </div>
    <div class="footer">

        <div class="footer-icons">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin-in"></i>
        </div>

        <div class="footer-text">
            <a href="../om-oss/">Om oss</a>
            <a href="https://www.facebook.com/henry.cantwell.5">Kontakta oss</a>
            <a href="https://ungforetagsamhet.se/gymnasiet">läs mer om UF</a> <br>
        </div>
        <p>@Donkey Soap UF</p>
    </div>
    <script src="./app.js"></script>
</body>
</html>