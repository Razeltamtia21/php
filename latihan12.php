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
        color: deeppink;
    }
    button {
        border: 1px solid black;
        cursor: pointer;
        width: 5%;
        border-radius: 5px;
        background-color: chartreuse;
    }
    button:hover {
        color: white;
        background-color: darkgreen;
    }
</style>

<form action="latihan12.php" method="post">
    <h2>Form Login PHP</h2>
    <div>
        <label for="Username">Username</label>
        <input type="text" name="username" required>
    </div>
    <div>
        <label for="Password">Password</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit" name="tombol-kirim" value="Kirim">Kirim</button>
</form>

<?php 

if(isset($_POST["tombol-kirim"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "Username anda: $username";
    echo "<br>";
    echo "Password anda: $password";
} else {
    echo "";
}
?>