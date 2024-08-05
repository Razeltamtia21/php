<form action="latihan5.php" method="POST">
    <label for="#username" style="display: block;">username</label>
        <input type="text" name="username">
    <label for="#password" style="display: block;">password</label>
        <input type="password" name="password">
    <button type="submit" style="display: block;">submit</button>
</form>

<?php 

session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if(isset($_SESSION['username']) and isset($_SESSION['password'])) {
    echo "SELAMAT DATANG USER...";
}else{
    echo "PULANG SANA HHHUUASSSS ";
}
?>