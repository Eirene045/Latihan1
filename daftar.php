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
    <h3> FORM MAHASISWA BARU</h3>
    <form action="pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="Nama">Nama: </label>
                <input type="text" name="Nama" placeholder="Isikan Nama Lengkap" />
            </p>
            <p>
                <label for="Jurusan">Jurusan: </label>
                <input type="text" name="Jurusan" placeholder="Isikan Jurusan" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>


<script src="/js/ui.js"></script>

</body>
</html>