<?php
include  ("../koneksi.php");
session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Anggota</title>
        <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        </style>
    </head>
    <body>
        <ul>
            <li><a href="#">Data Anggota</a></li>
            <li><a href="../buku/index.php">Data Buku</a></li>
        </ul>

        <h2>Data Anggota</h2>
        <?php if (isset($_SESSION['notifikasi'])): ?>
            <p><?php echo $_SESSION['notifikasi']; ?></p>
            <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>    
    <table>
        <thead> 
            <tr align="center">
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th><a href ="tambah_anggota.php">Tambah Data </a></th>
             </tr>
        </thead>
        <tbody>
            <?php
            $no = 1; //membuat penomoran data dari 1
            //membuat variable untuk menjalankan query SQL
            $query = $db->query("SELECT * FROM anggota");
            //perulangan while akan terus berjalan (menampilkan data)selama kondisi $query bernilai true (adanya data pada table buku)
            while ($anggota = $query->fetch_assoc()){
                //fungsi fetch_assoc digunakan untuk mengambil data perulangan dalam bentuk array
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $anggota['namaLengkap'] ?></td>
                <td><?php echo $anggota['email'] ?></td>

                <td align="center">
                    <!-- URL ke halaman edit data dengan menggunakan parameter id pada kolom table -->
                    <a href="edit_anggota.php?anggota_id=<?php echo $anggota['anggota_id'] ?>">Edit</a>
                     <!-- URL untuk menghapus data dengan menggunakan parameter id pada kolom table dan alert confirmasi hapus data-->
                    <a onclick="return confirm('Anda yakin ingin menghapus data?')"
                    href="hapus_anggota.php?anggota_id=<?php echo $anggota['anggota_id'] ?>">Hapus</a>
                </td> 
             </tr>
             <?php
            } 
            ?>
        </tbody>
    </table>
    <!-- menghitung jumlah baris yang ada pada table (buku) -->
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
