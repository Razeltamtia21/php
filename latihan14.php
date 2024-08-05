<style>
    div {
        padding: 5px 0;
    }

    label {
        display: block;
    }

    input {
        border: 1px solid black;
        border-radius: 5px;
    }

    button {
        width: 5%;
        border: 1px solid black;
        border-radius: 5px;
    }

    button:hover {
        text-decoration: underline;
    }

</style>

<form action="latihan14.php" method="post">
    <h2>PARKIRAN MOTOR DAN MOBIL</h2>
    <div>
        <label for="no-plat">Nomor plat</label>
        <input type="text" name="plat" required>
    </div>
    <div>
        <label for="motor">1. Motor</label>
        <label for="mobil">2. Mobil</label>
        <label for="kendaraan">Jenis kendaraan</label>
        <input type="number" name="kendaraan" required>
    </div>
    <div>
        <label for="motor">Jenis motor perjamnya Rp.2000</label>
        <label for="mobil">Jenis mobil perjamnya Rp.4000</label>
        <label for="biaya">biaya parjamnya</label>
        <input type="number" name="biaya">
    </div>
    <button type="submit" name="tombol-kirim">Kirim</button>
</form>

<?php 

if(isset($_POST["tombol-kirim"])){
    $plat = $_POST["plat"];
    $kendaraan = $_POST["kendaraan"];
    $biaya = $_POST["biaya"];

switch($kendaraan){
    case 1:
        $hasil = $biaya * 2000;
        echo "Nomor plat: $plat";
        echo "<br>";
        echo "Jenis kendaraan: Motor";
        echo "<br>";
        echo "Biaya total parkir: Rp.$hasil-";
        break;
    case 2:
        $hasil = $biaya * 4000;
        echo "Nomor plat: $plat";
        echo "<br>";
        echo "Jenis kendaraan: Mobil";
        echo "<br>";
        echo "Biaya total parkir: Rp.$hasil-";
        break;
    default:
        echo "Jenis kendaraan tidak sesuai. Silahkan coba lagi...";
        break;
    }
}

?>