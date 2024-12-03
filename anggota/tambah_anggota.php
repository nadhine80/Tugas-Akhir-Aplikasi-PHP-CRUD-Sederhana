<!DOCTYPE html>
<html>
<head>
    <title> Data Anggota </title>
</head>
<body>
    <h3> Tambah Data Anggota  </h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="namaLengkap" required></td>
            </tr>  
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" required></td>
            </tr> 
         </table>    
         <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>