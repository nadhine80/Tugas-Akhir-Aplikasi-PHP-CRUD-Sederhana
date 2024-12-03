<!DOCTYPE html>
<html>
<head>
    <title> Data Buku </title>
</head>
<body>
    <h3> Tambah Data Buku  </h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judulBuku" required></td>
            </tr>  
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" required></td>
            </tr>  
            <tr>
                <td>Tahun Publikasi</td>
                <td><input type="text" name="tahun_publikasi" required></td>
            </tr>
         </table>    
         <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>