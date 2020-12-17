<?php
//slå på felmeddelanden
error_reporting(E_ALL); 

//inloggningsuppgifter till vår databas

$host = "localhost";
$db = "kosttillskott";
$user = "kosttillskott";
$pass = "3C56lfyvj55oMjvm";


// Steg 1 -  Skapa en anslutning

$conn = new mysqli($host, $user, $pass, $db);

// Gick det bra att ansluta

if ($conn->connect_error) {
    die("kunde inte ansluta: " . $conn->error);
} else {
  //  echo "<p>Det gick bra att ansluta till vår databas</p>";
}
