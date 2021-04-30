<?php
//ta emot text
$texten = filter_input(INPUT_POST, "texten", FILTER_SANITIZE_STRING);

$textDoc = fopen("textDoc.txt", "w");
fwrite($textDoc, "Latitude->Longitude->text");
fclose($textDoc);
?>

