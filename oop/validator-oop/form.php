<?php
include ("./classes/Validator.php");

if (isset($_POST["submit"])) {
    $check = new Validator();
    $check->set($_POST);
    $check->validateEmail();
    $check->validatePassword();
    $check->validateUsername();
}
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <h1>Logga in</h1>
        <form action="#" method="post">
            <label>Användarnam <input type="text" required name="user"></label>
            <?php
            $check->showErrors('username');
            ?>
            <label>Lösenord <input type="password" required name="pass"></label>
            <?php
            $check->showErrors('password');
            ?>
            <label>Email<input type="email" required name="email"></label>
            <?php
            $check->showErrors('mail');
            ?>
            <button>Submit</button>
        </form>
    </div>
</body>

</html>