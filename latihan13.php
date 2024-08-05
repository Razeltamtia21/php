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
        border: 2px solid black;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        text-decoration: underline;
    }
</style>

<form action="latihan13.php" method="post">
    <h2>OPERATOR MATEMATIKA</h2>
    <div>
        <label for="Nilai1">Nilai 1</label>
        <input type="number" name="nilai1" required>
    </div>
    <div>
        <label for="Nilai2">Nilai 2</label>
        <input type="number" name="nilai2" required>
    </div>
    <div>
        <label for="Pilihan">1. Tambah</label>
        <label for="Pilihan">2. Kurang</label>
        <label for="Pilihan">3. Perkalian</label>
        <label for="Pilihan">4. Pembagian</label>
        <input type="number" name="pilihan" placeholder="pilih number di atas..." required>
    </div>
    <button type="submit" name="tombol-kirim">Kirim</button>
</form>

<?php 
if (isset($_POST["tombol-kirim"])) {
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $pilihan = $_POST["pilihan"];

    switch($pilihan){
        case 1:
            $hasil = $nilai1 + $nilai2;
            echo "Hasil nilai dari $nilai1 + $nilai2 adalah: $hasil";
            break;
        case 2:
            $hasil = $nilai1 - $nilai2;
            echo "Hasil nilai dari $nilai1 - $nilai2 adalah: $hasil";
            break;
        case 3:
            $hasil = $nilai1 * $nilai2;
            echo "Hasil nilai dari $nilai1 x $nilai2 adalah: $hasil";
            break;
        case 4:
            if ($nilai2 == 0) {
                echo "Pembagian dengan nol tidak diperbolehkan.";
            } else {
                $hasil = $nilai1 / $nilai2;
                echo "Hasil nilai dari $nilai1 / $nilai2 adalah: $hasil";
            }
            break;
        default:
            echo "Pilihan anda tidak sesuai. Coba lagi...";
    }
}
?>
