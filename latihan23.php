<?php 

//soal 1
echo "Hello World<br>";
print "Hello World<br><br>";


//soal2
$name = "John";
$age = 25;

echo "Nama saya $name dan saya berusia $age tahun.<br><br>";


//soal3
$num1 = 10;
$num2 = 20;
$hasil1 = $num1 + $num2;
$hasil2 = $num1 - $num2;
$hasil3 = $num1 * $num2;
$hasil4 = $num1 / $num2;

echo "$num1 + $num2 = $hasil1<br>";
echo "$num1 - $num2 = $hasil1<br>";
echo "$num1 x $num2 = $hasil1<br>";
echo "$num1 / $num2 = $hasil1<br>";


//soal4

$score = 85;

if($score >= 80){
    echo "Nilai anda adalah A<br><br>";
}else if ($score >= 70){
    echo "Nilai anda adalah B<br><br>";
}else if ($score >= 60){
    echo "Nilai anda adalah C<br><br>";
}else if ($score >= 50){
    echo "Nilai anda adalah D<br><br>";
}else {
    echo "Nilai anda adalah E<br><br>";
}


//soal5

for($a = 1; $a <= 10; $a++){
    echo "$a<br>";
}

$a = 1;

while($a <= 10){
    echo "$a<br>";
    $a++;
}

$a = 1;
do{
    echo "$a<br>";
    $a++;
}while($a <= 10)
?>