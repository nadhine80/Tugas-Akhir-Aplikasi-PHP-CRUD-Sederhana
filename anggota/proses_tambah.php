<?php
session_start();
include  ("../koneksi.php");

if (isset($_POST['simpan'])){
    $namaLengkap = $_POST['namaLengkap'];
    $email = $_POST['email'];

    $sql = "INSERT INTO anggota
    (namaLengkap, email)
    VALUES ('$namaLengkap', '$email')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data anggota berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data anggota gagal ditambahkan!";
    }
    header('Location: index.php');
} else {
    //jika akses langsung tanpa form, tampilkan pesan error
    die ("Akses ditolak...");
}
?>
