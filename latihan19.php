<style>

    body {
        margin: 30px;
        font-family: Arial, sans-serif;
    }

    label {
        display: block;
        margin: 5px 0;
    }

    button {
        margin: 10px 0;
        display: block;
    }

</style>

<form action="latihan20.php" method="post">
    <label for="">Nama</label>
    <input type="text" name="nama">
    <label for="">Kelas</label>
    <input type="text" inputmode="numeric" name="kelas">
    <label for="">Jurusan</label>
    <input type="text" name="jurusan"> 
    <button type="submit" name="kirim">Submit</button>
</form>