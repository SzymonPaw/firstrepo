<?php

$n = $_GET['war'];

    for($i=0;$i<$n;$i++) {
        $los = rand(25, 65);
        echo ($los);
        echo "<br>";
    }

?>

<form action="" method="GET">
    <input type="text" name="war">
    <input type="submit" name="show">
</form>