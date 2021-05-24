<?php
//ta emot data som skickas 
$username = filter_input(INPUT_POST, "user", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);


//användarnamnet måste vara 6-12 tecken långt, stora och små bokstäver samt sifforor
$errors = [];
function validateUsername($data)
{
    global $errors;
    if (!preg_match("/[a-zA-Z0-9]{6,12}/", $data)) {
        $errors['username'][] = "&#10005; Innehåller inte a-z, A_Z 0-9";
    } 
}
function validatePassword($data){
    global $errors;
    if (!preg_match("/[a-zåäö]/", $data) > 0) {
       $errors['password'][] =  "&#10005; password must contain a least one lowercase character <br>";
    }
    if (!preg_match("/[A-ZÅÄÖ]/", $data) > 0) {
        $errors['password'][] = "&#10005; password must contain a least one uppercase character <br>";
    }
    if (!preg_match("/[0-9]/", $data) > 0) {
        $errors['password'][] = "&#10005; password must contain a least one alphanumeric <br>";
    }
    if (!preg_match("/[#%&¤_\*\-\+\@\!\?\(\)\[\]\$£€]/", $data) > 0) {
        $errors['password'][] = "&#10005; password must contain a least one special character <br>";
    }
    if (!preg_match("/^.{8,40}$/", $data) > 0) {
        $errors['password'][] = "&#10005; password must at least 8 character long <br>";
    }
}
function validateEmail($data)
{
    global $errors;
    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
        $errors['mail'][] = "$data is not
         a valid email address";
      }
}

function showErrors($type){
    global $errors;
    echo "<p>";
    foreach ($errors[$type] as $error) {
        
        echo $error;    
    }
    echo "</p>";
}
//kontrollera om data finns
if ($username && $password && $email) {
    //kontrollera att username följer reglerna
    validateUsername($username);
    //kontrollera att lösenordet följer reglerna
    validatePassword($password);
    //kontrollera att eposten följer reglerna
    validateEmail($email);
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
            showErrors('username');
            ?>
            <label>Lösenord <input type="password" required name="pass"></label>
            <?php
            showErrors('password');
            ?>
            <label>Email<input type="email" required name="email"></label>
            <?php
            showErrors('mail');
            ?>
            <button>Submit</button>
        </form>
    </div>
</body>

</html>