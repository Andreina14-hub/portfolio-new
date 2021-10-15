<?php


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to="omar.perez@gmail.com";
$body="$name quiere contactar con tigo, su email es $email \n\n $message";
mail($to,"portafolio email",$body)


?>