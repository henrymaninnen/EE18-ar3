<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testar chartjs.org</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="smhi.css">
</head>
<body>
    <div class="kontainer">
        <h1>Tiodagarsprognos</h1>
        <canvas id="myChart"></canvas>
    <?php
    $url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json";

    //hämta json data
    $json = file_get_contents($url);

    $jsonData = json_decode($json);

    //Plocka ut publiceringstid
    $approvedTime = $jsonData->approvedTime;
    $timeSeries = $jsonData->timeSeries;

    //skapa en variabel för att samla ihop alla
    //ALLA TIDPUNKTER
    //alla tidpunkter och alla temperaturer
    $temperaturer = "";
    $tidpunkter = "";
    //loopa igenom arrayen
    foreach ($timeSeries as $timeData) {
        //plocka ut tidpunkt
        $validTime = $timeData->validTime;
        echo "$validTime";
        $tidpunkter .= "'$validTime', ";


        //plocka ut temperaturena
        $parameters = $timeData->parameters;
        $temperaturen = $parameters[10]->values[0];
        $temperaturer .= "'$temperaturen', ";
    }

    //skriv ut lite javascript
    echo "<script>";
    echo "const labels = [$tidpunkter];
    const data = {
        labels: labels,
        datasets: [{
            label: 'Tio dagars prognos',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [$temperaturer],
        }]
    };
    const config = {
        type: 'line',
        data,
        options: {}
    };
    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );";
    echo "</script>";
    echo "<p>Prognosen oublicerad $approvedTime</p>";
    echo "</div>";
    ?>
</body>
</html>