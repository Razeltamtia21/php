<?php 

$x = 45;

if($x < 50){
echo "benar";
}else if($x == 50){
echo "tepat";
}else {
echo "salah";
}


$y = 15;

if($y % 3 == 0 && $y % 5 == 0){
echo "benar";
}else if ($y % 3 == 0){
echo "tepat1";
}else if ($y % 5 == 0){
echo "tepat2";
}else {
echo "salah";
}

$age = 18;

if($age < 12){
echo "anal-anak";
}else if ($age >= 12 && $age < 18){
echo "remaja";
}else {
echo "dewasa";
}

$score = 85;

if($score >= 90){
echo "a";
}else if ($score >= 80){
echo "b";
}else if ($score >= 70){
echo "c";
}else {
echo "nol";
}



$month = 7; // Ubah nilai ini untuk menguji kondisi yang berbeda

if($month >= 3 && $month <= 5){
    echo "Musim Semi";
}else if($month >= 6 && $month <= 8){
    echo "Musim Panas";
}else if($month >= 9 && $month <= 11){
    echo "Musim Gugur";
}else {
    echo "Musim Dingin";
}

$string1 = "Hello";
$string2 = " World";
$combinedString = $string1 . $string2;
echo $combinedString;

?>