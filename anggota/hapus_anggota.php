<?php
session_start();
include  ("../koneksi.php");

if (isset($_GET['anggota_id'])) {
    $anggota_id = $_GET['anggota_id'];

    //buat query untuk menghapus data siswa berdasarkan ID
    $sql = "DELETE FROM anggota WHERE anggota_id=$anggota_id";
    $query = mysqli_query($db, $sql);

    //simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "Data anggota berhasil dihapus";
    } else {
        $_SESSION['notifikasi'] = "Data anggota gagal dihapus!";
    }

    //alihkan ke halaman index.php
    header('Location: index.php');
} else {
    //jka akses langsung tanpa ID, tampilkan pesan error
    die ("Akses ditolak...");
}
?>