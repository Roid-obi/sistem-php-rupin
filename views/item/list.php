<!DOCTYPE html>
<html>
<head>
    <title>Daftar Item - RuPin</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        h1 { color: #333; }
        ul { list-style: none; padding: 0; }
        li { background-color: #fff; border: 1px solid #ddd; margin-bottom: 10px; padding: 10px; border-radius: 5px; }
        li a { text-decoration: none; color: #007bff; }
        li a:hover { text-decoration: underline; }
        .navigation { background-color: #333; color: #fff; padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        .navigation a { color: #fff; text-decoration: none; margin-right: 15px; }
        .navigation a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="navigation">
        <a href="index.php">Beranda</a>
        <a href="index.php?action=cariItem&kataKunci=">Cari Item</a>
        </div>

    <h1>Daftar Item</h1>
    <form action="index.php" method="get">
        <input type="hidden" name="action" value="cariItem">
        <input type="text" name="kataKunci" placeholder="Cari nama atau deskripsi item">
        <button type="submit">Cari</button>
    </form>
    <ul>
        <?php if (!empty($hasilPencarian)): ?>
            <?php foreach ($hasilPencarian as $item): ?>
                <li><a href="index.php?action=lihatDetailItem&id=<?php echo $item->id; ?>"><?php echo $item->nama; ?></a> - Rp <?php echo number_format($item->harga, 0, ',', '.'); ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Tidak ada item yang ditemukan.</li>
        <?php endif; ?>
    </ul>
</body>
</html>