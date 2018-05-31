<?php

// FizzBuzz :
// Ecrire un programme qui affiche les nombres de 1 à 199.
// Mais pour les nombres multiples de 3, afficher Fizz au lieu du nombre et pour les multiples de 5, afficher Buzz.
// Pour les nombres multiples de 3 et 5, afficher FizzBuzz.

// 3    =>Fizz
// 5    => Buzz
// 15   => FizzBuzz

function fizzbuzz($nombre) {
    $affichage = "";
    for( $n=1; $n <= $nombre; $n++ ) {
        if( ($n % 3 === 0) && ($n % 5 === 0) ) {
            $affichage .= "FizzBuzz<br>";
        } elseif( ($n % 3 === 0) ) {
            $affichage .= "Fizz<br>";
        } elseif( ($n % 5 === 0) ) {
            $affichage .= "Buzz<br>";
        } else {
            $affichage .= "$n<br>";
        }   
    }
    return $affichage;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fizzbuzz</title>
</head>
<body>
    <p>
        <?= fizzbuzz(199) ?>
    </p>
</body>
</html>
