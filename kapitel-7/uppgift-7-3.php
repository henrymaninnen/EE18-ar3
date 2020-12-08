<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Hitta match med regex</h1>
        <form action="#" method="POST">
            <label>Ange text
                <input type="text" name="text" required>
            </label>
            <button>Skicka</button>
        </form>
        <?php
        /* Ta emot data som skickas */
        $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

        if ($text) {
            echo "<h3>Inmattat</h3>";
            echo "<p>Text: <em>'$text'</em></p>";

            echo "<h3>Resultat</h3>";
            // Matcha "123"
            // Regex = regular expression = reguljära uttryck
            // På samma sätt som strstr()

            //matcha siffror
            if (preg_match_all("/[a-zåäö\s\.]+[0-9]+/i", $text, $träffar)) {
                echo "<p>&#10003; Innehåller en bokstav i alfabetet.</p>";
                var_dump($träffar);
                echo "<ul>";
                foreach ($träffar[0] as $träff) {
                   
                echo "<li>$träff</li>";

                  
                }
                echo "</ul>";
            } else {
                echo "<p>&#10005; Innehåller INTE en siffra.</p>";
            } 

          
        }
        ?>
    </div>
</body>
</html>