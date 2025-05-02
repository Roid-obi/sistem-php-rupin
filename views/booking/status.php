<!DOCTYPE html>
<html>
<head>
    <title>Status Booking - RuPin</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        h1, h2 { color: #333; }
        p { line-height: 1.6; }
        .status-container { background-color: #fff; border: 1px solid #ddd; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
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
        <a href="index.php?action=lihatDetailBooking&id=<?php echo $booking->bookingId; ?>">Lihat Detail Booking</a>
    </div>

    <div class="status-container">
        <h1>Status Booking #<?php echo $booking->bookingId; ?></h1>
        <p><strong>Status:</strong> <?php echo $booking->status; ?></p>
        <a href="index.php?action=lihatDetailBooking&id=<?php echo $booking->bookingId; ?>" class="button">Lihat Detail Booking</a>
        <a href="index.php" class="button">Kembali ke Beranda</a>
    </div>
</body>
</html>