<style>

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    form {
        width: 100%;
        margin: 0 auto;
        max-width: 400px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        background-color: #fff;
    }

    h2 {
        font-size: 2rem;
        text-align: center;
        margin-bottom: 15px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .container {
        padding: 0 15px;
        margin-bottom: 10px;
    }

    .container label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input {
        font-size: 1rem;
        padding: 10px;
        width: 100%;
        height: 7%;
        margin: 0 auto;
        border: 1px solid #000;
        border-radius: 10px;
    }

    .wrapper {
        padding: 0 15px;
        margin-bottom: 20px;
    }

    .btn {
        font-size: 1rem;
        font-weight: bold;
        width: 100%;
        height: 5%;
        margin: 0 auto;
        border: 1px solid #000;
        border-radius: 10px;
        background-color: forestgreen;
        cursor: pointer;
    }

    .btn:hover {
        background-color: darkgreen;
    }
</style>

<form action="latihan18.php" method="post">
    <h2>Login</h2>
    <div class="container">
        <label for="email">Email</label>
        <input type="email" name="email" required>
    </div>
    <div class="container">
        <label for="passowrd">Password</label>
        <input type="password" name="password" required>
    </div>
    <div class="wrapper">
    <button type="submit" class="btn" name="tombol-kirim">Submit</button>
    </div>
</form>

<?php 

if(isset($_POST ["tombol-kirim"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email == "razeltamtia@gmail.com" && $password == "razeltamtia211206"){
        echo "<script> alert('Login berhasil') </script>";
    } else {
        echo "<script> alert('Login gagal, email atau password salah') </script>";
    }

}

?>