<?php
    $owoce = array ("d"=>"mango ", "a"=>"papaja ", "b"=>"banan ", "c"=>"aronia ");
    ksort ($owoce);

    //ksort - po kluczu 
    //asort - po wartosci
    //reset - Powrót do pierwszego elementu tablicy

    reset ($owoce);
    while (list ($klucz, $wartosc) = each($owoce)) {
        echo "$klucz = $wartosc";
    }
?>