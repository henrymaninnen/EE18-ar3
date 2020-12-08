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
            if (preg_match("/[0-9]/", $text)) {
                echo "<p>&#10003; Innehåller en bokstav i alfabetet.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en siffra.</p>";
            } 

            //matcha stora och små bokstäver
            if (preg_match("/[a-zåäö]/i", $text)) {
                echo "<p>&#10003; Innehåller en bokstav i alfabetet.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en bokstav.</p>";
            }  

            if (preg_match("/[^_]/", $text)) {
                echo "<p>&#10003; Innehåller en bokstav i alfabetet.</p>";
            } else {
                echo "<p>&#10005; Innehåller teckent "_".</p>";
            } 

            //Sök efter "a" eller "aa" dvs en eller flera
            if (preg_match("/a+/i", $text)) {
                echo "<p>&#10003; Innehåller en eller flera a i följd.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en siffra.</p>";
            }  

            if (preg_match("/a*/i", $text)) {
                echo "<p>&#10003; Innehåller en eller flera a i följd.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en siffra.</p>";
            } 

            //mathca ett antal, tex en ip-adress som 192.168.0.10
            if (preg_match("/[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3} /", $text)) {
                echo "<p>&#10003; Innehåller en eller flera a i följd.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en siffra.</p>";
            } 

            //mathca ett antal, tex en ip-adress som 192.168.0.10
            if (preg_match("/SA{1,2}B/", $text)) {
                echo "<p>&#10003; Innehåller en eller flera a i följd.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en siffra.</p>";
            }  
        }
        ?>
    </div>
</body>
</html>