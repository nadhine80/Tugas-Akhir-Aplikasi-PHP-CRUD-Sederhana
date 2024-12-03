<?php
session_start();
include  ("../koneksi.php");

if (isset($_POST['simpan'])) {
    $anggota_id = $_POST['anggota_id'];
    $namaLengkap = $_POST['namaLengkap'];
    $email = $_POST['email'];

    $sql = "UPDATE anggota SET
    namaLengkap='$namaLengkap',
    email='$email'
    WHERE anggota_id=$anggota_id";

 $query = mysqli_query($db, $sql);
 if ($query) {
    $_SESSION['notifikasi'] = "Data anggota berhasil diperbarui!";
 } else {
    $_SESSION['notifikasi'] = "Data anggota gagal diperbarui!";
}
//alihkan ke halaman index.php
 header('Location: index.php');
} else {
    //jika akses langsung tanpa form, tampilkan pesan error
    die ("Akses ditolak...");
}
?>