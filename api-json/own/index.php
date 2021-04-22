<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Väder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Dagens väder</h1>
    <?php
    //api-nyckel till tjänsten
    $api = "22ee1d58f7adae08ee71fa7c0bd24481";

    //staden
    $stad = "Stockholm";
    $url = "https://api.openweathermap.org/data/2.5/weather?q=$stad&appid=$api&units=metric";
    //gör ett anrop
   $json = file_get_contents($url);

   //avkoda json
   $jsonData = json_decode($json);
    //plocka ut kordniater
   $coord = $jsonData->coord;
   $lon = $coord->lon;
   $lat = $coord->lat;

        echo "<p>$lat $lon</p>";
   //väder
    $weather = $jsonData->weather;
    $description = $weather[0]->description;
    $icon = $weather[0]->icon;

    echo "<p>vädret är: $description</p>";

    echo "<img src=\"http://openweathermap.org/img/wn/$icon@2x.png\" alt=\"OMW\">";
    ?>
    </div>
</body>
</html>