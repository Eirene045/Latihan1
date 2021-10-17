<?php
include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $jurusan = $_POST['Jurusan'];

    $sql = "UPDATE mahasiswa SET Nama='$nama', 
    Jurusan= '$jurusan' WHERE ID=$id";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: list.php');
    } else {
        dic("Gagal menyimpan perubahan...");
    }

}else{
    die("Akses dilarang...");
}

?>