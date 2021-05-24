<?php
/**
* PHP version 7
* @category   
* @author     Henry Cantwell Karim Ryde <cantwellhenry61@gmail.com>
* @license    PHP CC
*/

/*
1. Skapa en klass
2. Skapa en konstruktor
3. Kontrollera att inga fält saknas
4. Skapa funktioner för att validera
4.1 En funktion för att validera username
4.1 En funktion för att validera email
4.2 En funktion för att validera lösenord
5. Returnera en array med alla fel */

class Validator
{
    //properties
   private $errors = [];
   private $data;


    //Methods
    public function set($postdata){
        $this->data = $postdata;
    }

 public function validateUsername()
{
    $this->errors;
    if (!preg_match("/[a-zA-Z0-9]{6,12}/", $this->data)) {
        $this->errors['username'][] = "&#10005; Innehåller inte a-z, A_Z 0-9";
    } 
}
public function validatePassword(){
     $this->errors;
    if (!preg_match("/[a-zåäö]/", $this->data) > 0) {
       $this->errors['password'][] =  "&#10005; password must contain a least one lowercase character <br>";
    }
    if (!preg_match("/[A-ZÅÄÖ]/", $this->data) > 0) {
        $this->errors['password'][] = "&#10005; password must contain a least one uppercase character <br>";
    }
    if (!preg_match("/[0-9]/", $this->data) > 0) {
        $this->errors['password'][] = "&#10005; password must contain a least one alphanumeric <br>";
    }
    if (!preg_match("/[#%&¤_\*\-\+\@\!\?\(\)\[\]\$£€]/", $this->data) > 0) {
        $this->errors['password'][] = "&#10005; password must contain a least one special character <br>";
    }
    if (!preg_match("/^.{8,40}$/", $this->data) > 0) {
        $this->errors['password'][] = "&#10005; password must at least 8 character long <br>";
    }
}
public function validateEmail()
{
    $this->errors;
    if (!filter_var($this->data, FILTER_VALIDATE_EMAIL)) {
        $this->errors['mail'][] = "$this->data is not
         a valid email address";
      }
}

public function showErrors($type){
     $this->errors;
    echo "<p>";
    foreach ($this->errors[$type] as $error) {
        
        echo $error;    
    }
    echo "</p>";
}
}
?>