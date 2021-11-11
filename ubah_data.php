<?php
    include './koneksi.php';
    $id_buku = $_get["id_buku"];

    $sql = "SELECT * FROM buku WHERE id=".$id_buku;
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();
?>
<form action= "ubah.php" method="post">
     <input type="hidden" name="id" value="<?php echo $result['id']?>">
     <table>
         <tr>
             <td>ID Buku</td>
             <td>:</td>
             <td><input type="text" name="id_buku" value="<?php echo $result['id_buku']?>"><td>    
         </tr>    
         <tr>
             <td>Judul Buku</td>
             <td>:</td>
             <td><input type="text" name="judul_buku" value="<?php echo $result['judul_buku']?>"></td>
         </tr>
         <tr>
             <td>penulis_buku</td>
             <td>:</td>
             <td><textarea name="penulis_buku"><?php echo $result['penulis_buku'];?></textarea></td>
         </tr>
     </table>
     <input type="submit" name="simpan" value="UBAH">
</form>