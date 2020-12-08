<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <form action="upload.php" method="Post" enctype="multipart/form-data">
            <label>ANGe filnamn
                <input type="file" name="file">
                <button type="submit" name="submit">Ladda up</button>
            </label>
        </form>
    </div>
</body>
</html>