<?php

$age = 18;

switch($age) {
    case $age>=18:
        echo "je suis majeur";
        break;
    case $age<18:
        echo "je suis mineur";
        break;
    default:
        echo "il y a un probleme";
    
    }