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
    <title>Blogg</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Min Blogg</h1>
        <form action="#" method="POST">
            <nav>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
                    <li class="nav-item"><a class="nav-link" href="./skriva.php">Skriva</a></li>
                    <li class="nav-item"><a class="nav-link active" href="./sok.php">Sök</a></li>
                </ul>
            </nav>
            <label>Ange Sökterm<input type="text" name="sökterm"></label>
            <button>Spara</button>
        </form>
        <?php
        // Ta emot det som skickas
        $sökterm = filter_input(INPUT_POST, 'sökterm', FILTER_SANITIZE_STRING);
     

        // Om data finns..
        if ($sökterm) {

            //skrive sql-satsen
            $sql = "SELECT * FROM `post` WHERE header LIKE '%$sökterm%' OR syfte LIKE '%$sökterm%' OR pris LIKE '%$sökterm%'";
          
            $result = $conn->query($sql);

            if (!$result) {
                die("Något blev fel med SQL" . $conn->error);
            } else {
                echo "<p>Hämtade " . $result->num_rows . " inlägg</p>";
            }
            while ($rad = $result->fetch_assoc()) {
                echo "<div class=\"inlägg\">";
                echo "<h5>$rad[header]</h5>";
                echo "<h6>$rad[syfte]</h6>";
                echo "<p> $rad[pris]</p>";
                echo "</div>";
            }

            //Steg 3 stänga ned anslutningen

            $conn->close();
        }
        ?>
    </div>
</body>
</html>