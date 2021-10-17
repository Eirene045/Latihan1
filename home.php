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

    <div id="main">
        <div class="header">
            <h1>Data Mahasiswa</h1>
            <h2>Universitas Merdeka Malang</h2>
        </div>
         <div class="container-button">
            <p>
            <a href="daftar.php" class="pure-button pure-button-primary">MAHASISWA BARU</a>
            </p>
            <p>
            <a href="list.php" class="pure-button pure-button-primary">DATA MAHASISWA</a>
            </p>
            </div>
            <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Pendaftaran berhasil";
                } else {
                    echo "Pendaftaran gagal!";
                }
                ?>
            </p>
        <?php endif; ?>

</div>

<script src="/js/ui.js"></script>

</body>
</html>