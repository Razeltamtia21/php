<?php 

if(isset($_POST ["kirim"])){
    $nama = $_POST ["nama"];
    $kelas = $_POST ["kelas"];
    $jurusan = $_POST ["jurusan"];
}

?>

<style>


    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
    }

    table {
        width: 100%;
        margin: 0 auto;
        max-width: 800px;
        text-align: center;
    }

    #wrapper {
        color: white;
        font-weight: bold;
        background-color: cornflowerblue;
    }

</style>

<table border="1">
    <tr id="wrapper">
        <th>NO</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>JURUSAN</th>
    </tr>
    <tr>
        <td>
            <?php 
            echo "1";
            ?>
        </td>
        <td>
            <?php 
            echo "$nama";
            ?>
        </td>
        <td>
            <?php 
            echo "$kelas";
            ?>
        </td>
        <td>
            <?php 
            echo "$jurusan";
            ?>
        </td>
    </tr>
</table>