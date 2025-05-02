<!DOCTYPE html>
<html>
<head>
    <title>Beranda Penyewa - RuPin</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        h1 { color: #333; }
        .navigation { background-color: #333; color: #fff; padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        .navigation a { color: #fff; text-decoration: none; margin-right: 15px; }
        .navigation a:hover { text-decoration: underline; }
        .container { background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body>
    <div class="navigation">
        <a href="index.php?action=penyewaHome">Beranda</a>
        <a href="index.php?action=cariItem&kataKunci=">Cari Item</a>
        <a href="index.php?action=lihatBookingSaya">Lihat Booking Saya (Belum Aktif)</a>
        <a href="index.php?action=logout">Logout</a>
    </div>

    <div class="container">
        <h1>Selamat Datang di Beranda Penyewa!</h1>
        <p>Anda dapat mencari item yang tersedia dan melakukan peminjaman.</p>
        <p><a href="index.php?action=cariItem&kataKunci=">Mulai Mencari Item</a></p>
    </div>
</body>
</html>