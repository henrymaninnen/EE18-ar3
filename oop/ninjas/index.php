<?php

    class User {

        //properties methodz
       public $username = "karim";
       public $email = "karim@google.se";

       public function addFriend(){
           return "added a new friend";

       }
    }

   $userOne = new User();
   $userTwo= new User();

    //kolla alla egenskaper

    echo $userOne->username . "<br>";
    echo $userOne->email . "<br>";
    echo $userOne->addFriend() . "<br>";

   echo 'the class is' . get_class($userTwo);

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ninjas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>