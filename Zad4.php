<?php

if(isset($_POST['Show'])) {
$n = $_POST['liczba'];
 
if($n<=2) {
    echo "1";
}

else {
    $x=1;
    $y=1;
    $z; 

    for($i=3;$i<=$n;$i++){
        $z=$x+$y;
        $x=$y;
        $y=$z;
    }
    echo $y;
}}
?>

<form action="" method="POST">
    Liczba: <input type="text" name="liczba"><br>
    <input type="submit" name="Show"><br>
</form>