<?php 

$umur = 21;

if($umur <= 6){
    $diskon = "Anda mendapatkan diskon 80%";
}else if($umur > 6 && $umur <= 16) {
    $diskon = "Anda mendapatkan diskon 50%";
}else if($umur > 16 && $umur <= 21) {
    $diskon = "Anda mendapatkan diskon 25%";
}else{
    $diskon = "Anda tidak mendapatkan diskon apapun..";
}

echo "Anda berusia $umur tahun, sehingga $diskon";

?>