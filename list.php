<?php include("config.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Responsive Side Menu &ndash; Layout Examples &ndash; Pure</title>
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="layout">

    <a href="#menu" id="menuLink" class="menu-link">

        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#company">Menu</a>

           <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="home.php" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="daftar.php" class="pure-menu-link">Daftar Baru</a></li>
                <li class="pure-menu-item"><a href="list.php" class="pure-menu-link">Data Mahasiswa</a></li>
            </ul>
        </div>
    </div>

        <h3>Mahasiswa yang sudah mendaftar</h3>

    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM Mahasiswa";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$siswa["ID"]."</td>";
                echo "<td>".$siswa["Nama"]."</td>";
                echo "<td>".$siswa["Jurusan"]."</td>";
                
                echo "<td>";
                echo "<a href='edit.php?id=".$siswa['ID']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$siswa['ID']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            
            }
            ?>
        </tbody>
    </table>
    <div class="navigasi">

        <nav>
        <a href="daftar.php">[+] Tambah Baru</a>
        </nav>

    </div>

<script src="/js/ui.js"></script>

</body>
</html>