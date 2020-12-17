<?php
/*
/ en enjek blogg som anävnder en databas
* PHP version 7
* @category   Webbaplikatiion med databas
* @author     Henry Cantwell <henry.cantwell@elev.ga.ntig.se>
* @license    PHP CC
*/
include "./resuser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kosttillskott</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>kosttillskott</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="./lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link" href="./admin/skriva.php">Skriva</a></li>
                <li class="nav-item"><a class="nav-link" href="./sok.php">Sök</a></li>
            </ul>
        </nav>

        <?php
        //Steg 2. SQL-fråga
        $sql = "SELECT * FROM post";
        $result = $conn->query($sql);

        //gick det bra

        if (!$result) {
            die("Något gick fel med sql satsen:" . $conn->error);
        } else {
            echo "<p>Hämtade " . $result->num_rows . " inlägg</p>";
        }

        //steg 3
        while ($rad = $result->fetch_assoc()) {
            echo "<div class=\"inlägg\">";
            echo "<h5>$rad[produktNamn]</h5>";
            echo "<h6>$rad[syfte]</h6>";
            echo "<p> $rad[pris]</p>";
            echo "</div>";
        }
        //Steg 4 Stäng ned anslutningen till databas

        $conn->close();

        ?>
    </div>
</body>
</html>