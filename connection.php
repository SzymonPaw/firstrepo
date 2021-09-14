<style>
    td {
        border: 1px solid #000;
        background: red;
        color: #fff;
    }
</style>

<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';
   $conn= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($conn,$base);
 
   $sql = "SELECT * FROM `test` ORDER BY `test`.`id` ASC";
    $result = $conn->query($sql);

    echo "<table>";
    echo "<tr>";
        echo "<td>";
            echo "ID:";
        echo "</td>";
        echo "<td>";
            echo "Imie:";
        echo "</td>";
        echo "<td>";
            echo "Nazwisko:";
        echo "</td>";
    echo "</tr>";
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";

            echo "<td>";
                echo $row["id"];
            echo "</td>";

            echo "<td>";
                echo $row["Imie"];
            echo "</td>";

            echo "<td>";
                echo $row["Nazwisko"];
            echo "</td>";

        echo "</tr>";
    }
    } else {
        echo "0 results";
    }
    echo "</table>";

if(isset($_GET['subdodaj'])) {
        $iddodaj = $_GET['iddodaj'];
        $imiedodaj = $_GET['imiedodaj'];
        $nazwiskododaj = $_GET['nazwiskododaj'];
        $query = "INSERT INTO test(id, Imie, Nazwisko) values('$iddodaj', '$imiedodaj', '$nazwiskododaj')";
        $run =mysqli_query($conn,$query) or die(mysqli_error());
}

if(isset($_GET['sub'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM test WHERE id='$id'";
        $run =mysqli_query($conn,$query) or die(mysqli_error());
}
?>

<br>
<br>

<form action="" method="get">
    Dodaj nowa osobe: <br>
    ID: <input type="number" name="iddodaj"><br>
    Imie: <input type="text" name="imiedodaj"><br>
    Nazwisko:  <input type="text" name="nazwiskododaj"><br>
    <input name="subdodaj" type="submit" value="ok">
</form>

<form action="" method="get">
    ID do usunięcia: <br><input type="number" name="id"><br>
    <input name="sub" type="submit" value="ok">
</form>