<?php


$chaine = "Ceci est une chaîne de caractère.";

$chaine = explode(' ',$chaine);

foreach ($chaine as $key => $value) {
    if ($value != "") {
        echo $value . "<br>";
    }
}