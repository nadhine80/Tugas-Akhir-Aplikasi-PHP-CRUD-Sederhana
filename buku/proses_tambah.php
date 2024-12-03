<?php
session_start();
include  ("../koneksi.php");

if (isset($_POST['simpan'])){
    $judulBuku = $_POST['judulBuku'];
    $penulis = $_POST['penulis'];
    $tahun_publikasi =$_POST['tahun_publikasi'];

    $sql = "INSERT INTO buku 
    (judulBuku, penulis, tahun_publikasi)
    VALUES('$judulBuku','$penulis','$tahun_publikasi')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data buku berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data buku gagal ditambahkan!";
    }
    header('Location: index.php');
} else {
    //jika akses langsung tanpa form, tampilkan pesan error
    die ("Akses ditolak...");
}
?>