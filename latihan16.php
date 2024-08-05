<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Rata-Rata Ulangan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }
        form {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,1);
        }
        h2 {
            font-size: 23px;
            text-align: center;
            margin-bottom: 20px;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 94%;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 7px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: 1px solid #000;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #2980b9;
        }
        input:focus, button:focus {
            outline: none;
            border-color: #2980b9;
        }
        @media screen and (max-width: 768px) {
            form {
                max-width: 100%;
            }
        }
        @media screen and (max-width: 480px) {
            form {
                max-width: 90%;
            }
        }
        @media screen and (max-width: 360px) {
            form {
                max-width: 80%;
            }
        }
    </style>
</head>
<body>
    <form action="latihan16.php" method="post">
        <h2>OPERATOR RATA-RATA ULANGAN</h2>
        <div>
            <label for="nilai1">Matematika</label>
            <input type="number" id="nilai1" name="nilai1" placeholder="Masukkan nilai" required>
        </div>
        <div>
            <label for="nilai2">Bahasa Indonesia</label>
            <input type="number" id="nilai2" name="nilai2" placeholder="Masukkan nilai" required>
        </div>
        <div>
            <label for="nilai3">Agama Islam</label>
            <input type="number" id="nilai3" name="nilai3" placeholder="Masukkan nilai" required>
        </div>
        <div>
            <label for="nilai4">Bahasa Inggris</label>
            <input type="number" id="nilai4" name="nilai4" placeholder="Masukkan nilai" required>
        </div>
        <button type="submit" name="tombol-kirim">Kirim</button>
    </form>

    <?php 
    if (isset($_POST["tombol-kirim"])) {
        $nilai1 = $_POST["nilai1"];
        $nilai2 = $_POST["nilai2"];
        $nilai3 = $_POST["nilai3"];
        $nilai4 = $_POST["nilai4"];

        // Calculate the average score
        $hasil = ($nilai1 + $nilai2 + $nilai3 + $nilai4) / 4;

        // Determine the grade based on the average score
        if ($hasil <= 40) {
            echo "<script>alert('Nilai yang Anda inputkan adalah $hasil . Anda mendapatkan grade E.')</script>";
        } elseif ($hasil <= 60) {
            echo "<script>alert('Nilai yang Anda inputkan adalah $hasil . Anda mendapatkan grade D.')</script>";
        } elseif ($hasil <= 80) {
            echo "<script>alert('Nilai yang Anda inputkan adalah $hasil . Anda mendapatkan grade C.')</script>";
        } elseif ($hasil <= 90) {
            echo "<script>alert('Nilai yang Anda inputkan adalah $hasil . Anda mendapatkan grade B.')</script>";
        } elseif ($hasil <= 100) {
            echo "<script>alert('Nilai yang Anda inputkan adalah $hasil . Anda mendapatkan grade A.')</script>";
        } else {
            echo "<script>alert('Nilai anda tidak valid. Silahkan coba lagi...')</script>";
        }
    }
    ?>
</body>
</html>
