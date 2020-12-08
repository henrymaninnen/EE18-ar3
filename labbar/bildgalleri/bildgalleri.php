<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bildgalleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        
        <?php
        // Ange katalogen
        $katalog = "./bilder";

        echo "<h1>Bildgalleri</h1>";

        echo "<div class=\"kol4\">";
        // Hämta katalogens innehåll
        $filer = scandir($katalog);
        
        // Loopa igenom alla funna filer
        foreach ($filer as $fil) {

            // Visa inte ”." och ”.."
            if ($fil == '.' || $fil == '..') {
                continue;
            }
            if (is_dir($katalog/$fil)) {
                continue;
            }

            // Visa bara bilden om filformat ”.jpg”
            $info = pathinfo($fil);
            if ($info["extension"] == "jpg") {
                echo "<img src=\"$katalog/$fil\" alt=\"\">";
            }
        }
        echo "</div>";
        ?>
    </div>

</body>
</html>