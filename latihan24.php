<form action="latihan24.php" method="post">
    <input type="text" name="input" placeholder="ketik suatu...">
    <input type="number" name="jumlah" placeholder="mau berapa cetak?">
    <button type="submit" name="kirim">Cetak</button>
</form>


<?php

if(isset($_POST["kirim"])){
    $input = $_POST["input"];
    $jumlah = $_POST["jumlah"];


    for($i = 1; $i <= $jumlah; $i ++){
        echo "$input <br>";
    }
}

?>