<form action="latihan4.php" method="POST">
    <input type="text" name="nama" placeholder="Username">
    <input type="submit" style="cursor: pointer;">
</form>

<?php 

if(isset($_POST["nama"])){
    $username = $_POST["nama"];
    echo "Username anda: ".$username;
}
?>
 