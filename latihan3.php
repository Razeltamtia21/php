<?php 

function persegiPanjang($lebar, $tinggi){
    $luas = $lebar * $tinggi;
    return $luas;
}
echo "Luas Persegi panjang lebar(5) dan tinggi(3) adalah: "; 
echo persegiPanjang(5, 3);
echo "<hr>";

function sum(...$input){
    $result = 0;

    foreach ($input as $value){
        $result = $result + $value; 
    }

    return $result;
}

echo "Jumlah hasil nilai yang di input sebanyak mungkin:  ";
echo sum(21, 29, 50);
?>