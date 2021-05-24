<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Väder</title>
    <link rel="stylesheet" href="../css/api.css">
</head>
<body>
    
    <div class="container">
        <div class="header">
            <a href="">HENRY</a>
            <h1>Din drink är</h1>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
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