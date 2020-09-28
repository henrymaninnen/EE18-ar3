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
    //veckodag på engelska
   $idag = date("l");

switch ($idag) {
    case 'monday':
        # code...
        break;
    
    case 'tuesday':
        # code...
        break;
    
    case 'wednesday':
        # code...
        break;
    
    case 'monday':
        # code...
        break;
    
    default:
        echo "<p>no day selected</p>";
        break;
}
   //hur upprepar man saker
   for ($i=0; $i < 11; $i++) { 
       echo "<p>Hej</p>";
   }

    ?>
</body>
</html>