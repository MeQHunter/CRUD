<?php
    include './koneksi.php';
    $id = $_POST['id'];
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    
    $sql = "UPDATE buku SET id_buku='$id_buku', judul_buku='$judul_buku', penulis_buku='$penulis_buku' WHERE id='$id'";
    if($conn->query($sql) === TRUE){
        echo "ubah data berhasil <br>";
        echo "<a href= 'tampil.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
?>