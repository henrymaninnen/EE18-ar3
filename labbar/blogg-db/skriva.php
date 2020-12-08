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
                    <li class="nav-item"><a class="nav-link active" href="./skriva.php">Skriva</a></li>
                    <li class="nav-item"><a class="nav-link" href="./sok.php">Admin</a></li>
                </ul>
            </nav>
            <label>Ange rubrik <input type="text" name="header"></label>
            <label>Ange text <textarea name="postText"></textarea></label>
            <button>Spara</button>
        </form>
        <?php
        // Ta emot det som skickas
        $header = filter_input(INPUT_POST, 'header', FILTER_SANITIZE_STRING);
        $postText = filter_input(INPUT_POST, 'postText', FILTER_SANITIZE_STRING);

        // Om data finns..
        if ($header && $postText) {

            //skrive sql-satsen
            $sql = "INSERT INTO `post` (`header`, `postText`) VALUES ('$header', '$postText')";

            // steg 2: nu kör vi sql-satsnera
            $result = $conn->query($sql);

            //gick det bra att köra sql satesen
            if (!$result) {
                die("Något blev fel med SQL");
            } else {
                echo "<p>Inlägget har registerards</p>";
            }

            //Steg 3 stänga ned anslutningen

            $conn->close();
        }
        ?>
    </div>
</body>
</html>