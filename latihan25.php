<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa;
        }

        form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #00796b;
            margin-bottom: 20px;
        }

        .container {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #00796b;
        }

        .hero {
            width: 100%;
            padding: 10px;
            border: 1px solid #00796b;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .containers {
            margin: 20px 0;
        }

        .btn {
            text-align: center;
        }

        button {
            padding: 10px 30px;
            font-weight: bold;
            color: #ffffff;
            border: none;
            background-color: #00796b;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
    <form action="latihan25.php" method="post">
        <h1>Pendaftaran</h1>
        <div class="container">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" class="hero" required>
        </div>
        <div class="container">
            <label for="tlp">Nomor Telepon</label>
            <input type="number" name="tlp" class="hero" required>
        </div>
        <div class="containers">
            <label for="jenis">Jenis Kelamin</label>
            <input type="radio" name="jenis" value="Pria" required> Pria
            <input type="radio" name="jenis" value="Wanita" required> Wanita
        </div>
        <div class="container">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="hero" required>
        </div>
        <div class="btn">
            <button type="submit" name="tombol-kirim">Kirim</button>
        </div>
    </form>
</body>
</html>

<?php 
if(isset($_POST["tombol-kirim"])){
    $nama = $_POST["nama"];
    $tlp = $_POST["tlp"];
    $jenis = $_POST["jenis"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    
    // Memecah tanggal lahir untuk mendapatkan tahun
    $tahun_lahir = date('Y', strtotime($tanggal_lahir));
    $tahun_sekarang = date('Y');
    $umur = $tahun_sekarang - $tahun_lahir;

    echo "<script>alert('Nama Lengkap: $nama\\nNomor Telepon: $tlp\\nJenis Kelamin: $jenis\\nUmur anda sekarang: $umur Tahun');</script>";
}
?>
