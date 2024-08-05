<form action = "latihan22.php" method = "post">

<input type = "text" name = "name" placeholder = "Nama">
<button type = "submit" name = "tombol-kirim">kirim<button>
</form>

<?php 

if(isset($_POST ["tombol-kirim"])){
$name = $_POST ["name"];

if($name == "razel"){
echo "hallo";
}

}

?>