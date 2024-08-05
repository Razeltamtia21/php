<?php 

//global variabel
$nama = "Razel Michelle Dude Nagara"; //string
$umur = 21; //integer
$damage = 2.81; //float
$efek = true; //boolean

//local variabel
function latihan(){
    // global $nama, $umur, $damage, $efek;
    //dalam function variabel
    $nama = "Lelouch";
    $umur = 17;

    echo 'nama anda adalah: '.$nama;
    echo '<br>umur anda adalah: '.$umur;
}

latihan();

?>