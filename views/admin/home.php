<!DOCTYPE html>
<html>
<head>
    <title>Beranda Admin - RuPin</title>
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
        <a href="index.php?action=adminHome">Beranda</a>
        <a href="index.php?action=kelolaTransaksiList">Kelola Transaksi (Belum Aktif)</a>
        <a href="index.php?action=konfirmasiPesananList">Konfirmasi Pesanan (Belum Aktif)</a>
        <a href="index.php?action=logout">Logout</a>
    </div>

    <div class="container">
        <h1>Selamat Datang di Beranda Admin!</h1>
        <p>Anda dapat mengelola transaksi dan mengkonfirmasi pesanan.</p>
        <p>Fitur pengelolaan transaksi dan konfirmasi pesanan akan ditambahkan kemudian.</p>
    </div>
</body>
</html>