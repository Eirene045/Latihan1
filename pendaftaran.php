<?php
include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['Nama'];
    $jurusan = $_POST['Jurusan'];

    $sql = "INSERT INTO mahasiswa (Nama, Jurusan) VALUE 
    ('$nama','$jurusan')";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: home.php?status=sukses');

    } else {
        header('Location: home.php?status=gagal');
    }
} else {
    die("Akses Dilarang....");
}
?>