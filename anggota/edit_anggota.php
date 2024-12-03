<?php
include  ("../koneksi.php");

$anggota_id = $_GET['anggota_id'];

//mengambil data siswa dari database berdasarkan ID
$query = $db->query("SELECT * FROM anggota WHERE anggota_id = '$anggota_id'");
$anggota = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Edit Data Anggota</title>
</head>
<body>
    <h3>Edit Data Anggota</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="anggota_id" value="<?php echo $anggota['anggota_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="namaLengkap" value="<?php echo $anggota['namaLengkap']; ?>" required> 
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value="<?php echo $anggota['email']; ?>" required> 
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>