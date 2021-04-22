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
        <h1>Dagens drink</h1>
    <?php
    $url = "https://www.thecocktaildb.com/api/json/v1/1/random.php";
    //gör ett anrop
   $json = file_get_contents($url);

   //avkoda json
   $jsonData = json_decode($json);
    //plocka ut kordniater
   $drinks = $jsonData->drinks;
   $strDrink = $drinks[0]->strDrink;
   $strIngredient1 = $drinks[0]->strIngredient1;
   $strIngredient2  = $drinks[0]->strIngredient2;
   $strInstructions = $drinks[0]->strInstructions;
   $strGlass = $drinks[0]->strGlass;

   echo "<p>Your drink is $strDrink <br> and your ingrediens are $strIngredient1 and $strIngredient2 <br> to make the drink you $strInstructions <br> Ur glass type is $strGlass</p>";
    ?>
    </div>
</body>
</html>