<?php
    //ksort - po kluczu 
    //asort - po wartosci
    //reset - Powrót do pierwszego elementu tablicy

    $klasa = array ("1"=>"Aleks ", "2"=>"Tomek ", "3"=>"Kuba ", "4"=>"Szymon ", "5"=>"Filip ", "6"=>"Max ", "7"=>"Łukasz ", "8"=>"Kacper ", "9"=>"Bartek ", "10"=>"Emil ");
    ksort ($klasa);
    reset ($klasa);
    while (list ($klucz, $wartosc) = each($klasa)) {
        echo "$klucz = $wartosc <br>";
    }


?>