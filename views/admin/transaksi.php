<!DOCTYPE html>
<html>
<head>
    <title>Detail Transaksi - RuPin (Admin)</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        h1, h2 { color: #333; }
        p { line-height: 1.6; }
        .transaction-container { background-color: #fff; border: 1px solid #ddd; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .button { background-color: #28a745; color: #fff; border: none; padding: 10px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 5px; }
        .button:hover { background-color: #1e7e34; }
        .navigation { background-color: #333; color: #fff; padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        .navigation a { color: #fff; text-decoration: none; margin-right: 15px; }
        .navigation a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="navigation">
        <a href="index.php">Beranda</a>
        </div>

    <div class="transaction-container">
        <h1>Detail Transaksi #<?php echo $transaction->transactionId; ?></h1>
        <p><strong>Booking ID:</strong> <?php echo $transaction->bookingId; ?></p>
        <p><strong>Total Transaksi:</strong> Rp <?php echo number_format($transaction->total, 0, ',', '.'); ?></p>
        <p><strong>Komisi:</strong> Rp <?php echo number_format($transaction->komisi, 0, ',', '.'); ?> (Belum dihitung otomatis)</p>
        <a href="index.php?action=hitungKomisi&id=<?php echo $transaction->transactionId; ?>" class="button">Hitung Komisi</a>
        <a href="index.php" class="button">Kembali ke Beranda</a>
    </div>
</body>
</html>