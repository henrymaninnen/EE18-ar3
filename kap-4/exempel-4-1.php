<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
   
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //En array som innehåller länder

    $länder = ["Sverige", "Norge", "Finland"];

    //Skriver ut en array

    print_r($länder);


    //Skriv ut en del ur en array

    echo "<p>$länder[0]</p>";
    echo "<p>$länder[1]</p>";
    echo "<p>$länder[2]</p>";

    //utöka array

    $länder[] = "Danmark";

    //ta bort ett element ur en array


    print_r($länder);


    //associativ array
    $elever = [];
    $elever["Viktor"] = "trummor";
    $elever["Lucas"] = "keyboard";
    $elever["Olle"] = "munspel";
    print_r($elever);

    echo "<p>$länder[0]</p>";
    echo "<p>$länder[1]</p>";
    echo "<p>$länder[2]</p>";
    echo "<p>$länder[3]</p>";


    //loopa igenom en array

    foreach ($elever as $instrument) {
        echo "<p>$instrument</p>";
    }
    foreach ($variable as $key => $value) {
        echo "<p>$key spelar $elev</p>";
    }

    //skriv ut som en tabell
    /* 
    <table>
        <tr>
            <td>John</td>
            <td>Doe</td>
        </tr>
        <tr>
            <td>Jane</td>
            <td>Doe</td>
        </tr>
    </table>
    */

    echo "<table>";
    echo "<tr>";
    echo "<td>John</td>";
    echo "<td>Doe</td>";
    echo "<tr>";
    echo "<table>";

    echo "<table>";
    foreach ($länder as $land) {
        echo "<tr>";
        echo "<td>$land</td>";
        echo "</tr>";
    }

    echo "</table>";

    //skriv ujt arraten elever som en tabell
    echo "<table>";
    echo " <tr>
    <th>Namn</th>
    <th>Instrument</th>
  </tr>";
    foreach ($elever as $key => $instrument) {
        echo "<tr>";
        echo "<td>$key</td><td>$instrument</td>";
        echo "</tr>";
    }
    echo "</table>";



    $mening = "Vi och våra partners bearbetar personuppgifter såsom IP-adress, unikt ID och browsingdata. Vissa partner begär inte ditt samtycke till att behandla dina data, utan de litar på sitt legitima affärsintresse. Visa vår lista över partners för att se de syften som de tror att de har ett legitimt intresse för och hur du kan göra invändningar mot det.";

    $allaOrd = explode(" ", $mening);
    // skriv ut alla ord numrerade i en tabell

    echo "<table>";
    echo " <tr>
    <th>ordning</th>
    <th>ord</th>
  </tr>";
    foreach ($allaOrd as $key => $ord) {
        $key = $key + 1;
        echo "<tr>";
        echo "<td>$key</td><td>$ord</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>