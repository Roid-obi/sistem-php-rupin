<!DOCTYPE html>
<html>
<head>
    <title>Detail Item - RuPin</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        h1, h2 { color: #333; }
        p { line-height: 1.6; }
        .detail-container { background-color: #fff; border: 1px solid #ddd; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .button { background-color: #007bff; color: #fff; border: none; padding: 10px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 5px; }
        .button:hover { background-color: #0056b3; }
        .navigation { background-color: #333; color: #fff; padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        .navigation a { color: #fff; text-decoration: none; margin-right: 15px; }
        .navigation a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="navigation">
        <a href="index.php">Beranda</a>
        <a href="index.php?action=cariItem&kataKunci=">Cari Item</a>
        <a href="index.php?action=lihatDetailBooking&id=1">Lihat Booking (Simulasi ID 1)</a> </div>

    <div class="detail-container">
        <h1><?php echo $item->nama; ?></h1>
        <p><strong>Deskripsi:</strong> <?php echo $item->deskripsi; ?></p>
        <p><strong>Harga:</strong> Rp <?php echo number_format($item->harga, 0, ',', '.'); ?></p>
        <p><strong>Ketentuan:</strong> <?php echo $itemDetail->ketentuan; ?></p>
        <a href="index.php?action=pesanItem&id=<?php echo $item->id; ?>&penyewaId=1" class="button">Pesan Item (Simulasi Penyewa ID 1)</a>
        <a href="index.php?action=cariItem&kataKunci=" class="button">Kembali ke Daftar Item</a>
    </div>
</body>
</html>