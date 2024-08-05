<?php 

$data = [
    "nama" => ["Lelouch", "Levi", "L", "Luffy", "Zoro"],
    "kelas"=> ["c", "b", "a", "s", "ss", "sss", "sss+"],
    "damage" => [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000],
];

// echo $data["nama"][0];
// echo $data["kelas"][6];
// echo $data["damage"][9];

echo "<hr>";

foreach($data as $key => $value){
    foreach($value as $val){
        echo $val;
        echo "  ";
    }
    echo "<br>";
}
?>