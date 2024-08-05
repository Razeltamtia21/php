<?php 

$inputan = 0;
$pilihan = 1;
$berapa_cetak = 15;

switch($pilihan) {
    case 1:
    $jawaban = "Kamu adalah yang terbaik ";
    break;
}
echo "$jawaban";
echo "<hr>";

while($inputan <= $berapa_cetak) {
    $inputan = $inputan + 1;
    echo "I Love You ";
    echo "<br>";
}
echo "<hr>";

for($inputan; $inputan <= $berapa_cetak; $inputan ++){
    echo "Sigma ";
    echo "<br>";
}
echo "<hr>";

?>