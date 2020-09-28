<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulär</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>KontaktFormulär</h1>
        <form action="uppgift3-5-svar.php" method="POST">
            <label for="belopp">Ange lånebelopp</label>
            <input id="namn" class="form-control" type="text" name="belopp>
            <label for="ränta">Ange ränta</label>
            <input id="namn" class="form-control" type="text" name="ränta">

            
            <label for="roll">Hur många år?</label>
            <div>
            <input type="radio" name="lånetid" value="1" checked> 1 år
            <input type="radio" name="lånetid" value="3"> 3 år
            <input type="radio" name="lånetid" value="5"> 5 år
        </div>

        
        <button class="btn btn-success" type="submit">Skicka</button>
           
        </div>
        </form>
        </div>
        </body>
</html>