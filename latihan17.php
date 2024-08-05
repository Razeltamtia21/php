<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>lelouch lamperouge</title>
<style>

body {
margin: 0;
padding: 0;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
background-color: #f4f4f4;
font-family: Arial, sans-serif;
}

form {
margin: 0 auto;
width: 100%;
max-width: 500px;
border-radius: 15px;
box-shadow: 0 0 10px rgba(0,0,0,0.1);
background-color: #fff;
}

form h2 {
text-align: center;
}

.container {
padding: 20px;
}

.wrapper {
margin-bottom: 10px;
}

.wrapper label {
display: block;
margin-bottom: 5px;
}

input {
width: 90%;
margin: 0 auto;
border-radius: 10px;
padding: 10px;
border: 1px solid #000;
}

.btn {
font-size: 1rem;
font-weight: bold;
width: 95%;
margin: 0 auto;
border-radius: 10px;
padding: 10px;
border: 1px solid #000;
background-color: green;
cursor: pointer;
color: #fff;
}

.btn:hover {
text-decoration: underline;
}



</style>
</head>
<body>
<form action="latihan17.php" method="post">
<h2>KASIR SEDERHANA</h2>
<div class="container">
<div class="wrapper">
<label>1. Bakso (Rp. 10000)</label>
<label>2. Nasi Kuning (Rp. 15000)</label>
<label>3. Mie Ayam (Rp. 12000)</label>
<label>4. Ketoprak (Rp. 13000)</label>
<input type="number" name="makanan" placeholder="pililah menu makanan..." required>
</div>
<div class="wrapper">
<label>1. Air Mineral (Rp. 1000)</label>
<label>2. Jus Jeruk (Rp. 5000)</label>
<label>3. Teh Manis (Rp. 3000)</label>
<label>4. Soda (Rp. 7000)</label>
<input type="number" name="minuman" placeholder="pililah menu minuman..." required>
</div>
<div class="wrapper">
<label>Masukkan Jumlah Uang</label>
<input type="number" name="jumlah" required>
</div>
<button type="submit" name="tombol-kirim" class="btn">Kirim</button>
</div>
</form>
</body>
</html>

<?php 
if(isset($_POST["tombol-kirim"])){
    $makanan = $_POST["makanan"];
    $minuman = $_POST["minuman"];
    $jumlah = $_POST["jumlah"];

    // Initialize variables to store the price
    $harga_makanan = 0;
    $harga_minuman = 0;

    // Determine the price of the selected food
    switch($makanan){
        case 1:
            $harga_makanan = 10000;
            break;
        case 2:
            $harga_makanan = 15000;
            break;
        case 3:
            $harga_makanan = 12000;
            break;
        case 4:
            $harga_makanan = 13000;
            break;
        default:
            echo "<script> alert('Menu makanan tidak valid') </script>";
            exit;
    }

    // Determine the price of the selected drink
    switch($minuman){
        case 1:
            $harga_minuman = 1000;
            break;
        case 2:
            $harga_minuman = 5000;
            break;
        case 3:
            $harga_minuman = 3000;
            break;
        case 4:
            $harga_minuman = 7000;
            break;
        default:
            echo "<script> alert('Menu makanan tidak valid') </script>";
            exit;
    }

    // Calculate the total price
    $total = $harga_makanan + $harga_minuman;

    // Check if the amount given is enough
    if($total > $jumlah){
        echo "<script>
        alert('Jumlah uang tidak cukup. Total yang harus dibayar adalah Rp. $total.');
        </script>";
    } else {
        echo "<script>
        alert('Terima kasih! Pembayaran Anda cukup.');
        </script>";
    }
}
?>
