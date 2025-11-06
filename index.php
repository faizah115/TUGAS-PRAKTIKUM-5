<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php?msg=Silahkan login dulu");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <span style="float:left;">Dashboard</span>
    <span style="float:right;">Hi, <?php echo $_SESSION['username']; ?></span>
    <div style="clear:both;"></div>
</header>

<div class="container">
    <aside>
        <ul class="menu">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="tabel-makanan.html">Makanan Khas</a></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>
    </aside>

    <section class="main">
        <p>Anda telah berhasil login</p>
    </section>
</div>

<footer>2025</footer>
</body>
</html>