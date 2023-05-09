<?php

// EXO 2
$array = [
    "film 1" => "asterix",
    "film 2" => "asterix",
    "film 3" => "batman",
    "film 4" => "asterix",
    "film 5" => "avengers",
];

foreach ($array as $key => $value) {
    if ($value != "") {
        echo $value . "<br>";
    }
}

