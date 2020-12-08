<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Henry Cantwell <henry.cantwell@elev.ga.ntig.se>
* @license    PHP CC
*/

$user = "henry";
$db = "henry";
$host = "localhost";
$pass = "VugD6x4rsYTBQYwK";

$pass = "Uh60PwnOivbp9mx5";

//logga in på mysql-servern och välj databas

$conn = new mysqli($host, $user, $pass, $db);

//gick det att ansluta?

if ($conn->connect_error) {
        die("kunde inte ansluta: " . $conn->connect_error);
} else {
    echo "<p>Hurrah! gick bra att ansluta</p>";
}


//ställ en sql-fråga
$sql = "SELECT * FROM bilar";
$resultat = $conn->query($sql);

// gick sql satsen att köra?
if (!$reslutat) {
    die("Något gick fel med sql-satsen");

} else {
    echo "<p>Lista på alla bilar som kunde hämtas</p>";
}

/// skriv listan
while ($rad = $resultat->fetch_assoc()) {
    echo "<p>$rad</p>";
}

//stäng ned anslutningnen

$conn->close();


?>









