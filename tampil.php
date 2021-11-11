<?php
    include './koneksi.php';
    echo "<a href= 'formulir.php'>Tambah data</a><br>";

    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "ID Buku : " . $baris[1] . "<br>";
        echo "Judul Buku : " . $baris[2] . "<br>";
        echo "Penulis Buku : " . $baris[3] . "<br>";
        echo "<a href= 'ubah_data.php?id_buku=$baris[0]'>Ubah &nbsp</a>";
        echo "<a href='hapus.php?id_buku=$baris[0]'>Hapus</a>";
        $a++;
    }
    $conn->close();





?>