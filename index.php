<?php
// FILE: index.php
require_once 'User.php';
require_once 'Item.php';
require_once 'Pemesanan.php';
require_once 'Pembayaran.php';
require_once 'LaporanBulanan.php';
require_once 'Session.php';

session_start();

// Dummy Data
$dummyUser = new User("Roid Robih", "roid@example.com", "123456", "admin", "aktif", "Surakarta");
$dummyItem = new Item(1, "Proyektor", "Elektronik", 3, "Gedung A", "tersedia");
$dummyBooking = new Pemesanan(1, 1, 1, "menunggu", date("Y-m-d"));
$dummyPembayaran = new Pembayaran(1, 1, 50000.0, "belum bayar", "transfer");
$laporan = new LaporanBulanan("Mei 2025", [$dummyPembayaran]);
$session = Session::createSession(1, "admin");

// Simpan session user
$_SESSION['user'] = $dummyUser;
$_SESSION['session'] = $session;

?>

<!DOCTYPE html>
<html>
<head>
  <title>RuPin - Peminjaman Ruang dan Alat</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    h1 { color: #333; }
    .box { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; }
  </style>
</head>
<body>
  <h1>Selamat Datang di RuPin (Ruang & Peralatan)</h1>

  <div class="box">
    <h2>Data User (Login)</h2>
    <p><strong>Nama:</strong> <?= $_SESSION['user']->nama ?></p>
    <p><strong>Email:</strong> <?= $_SESSION['user']->email ?></p>
    <p><strong>Role:</strong> <?= $_SESSION['user']->role ?></p>
  </div>

  <div class="box">
    <h2>Item Tersedia</h2>
    <p><strong>Nama Item:</strong> <?= $dummyItem->nama ?></p>
    <p><strong>Jumlah:</strong> <?= $dummyItem->jumlah ?></p>
    <p><strong>Status:</strong> <?= $dummyItem->status ?></p>
  </div>

  <div class="box">
    <h2>Pemesanan</h2>
    <p><strong>Item ID:</strong> <?= $dummyBooking->itemId ?></p>
    <p><strong>Status:</strong> <?= $dummyBooking->status ?></p>
    <p><strong>Tanggal:</strong> <?= $dummyBooking->tanggal ?></p>
  </div>

  <div class="box">
    <h2>Status Pembayaran</h2>
    <p><strong>Metode:</strong> <?= $dummyPembayaran->metode ?></p>
    <p><strong>Jumlah:</strong> Rp<?= number_format($dummyPembayaran->jumlah, 0, ',', '.') ?></p>
    <p><strong>Status:</strong> <?= $dummyPembayaran->status ?></p>
  </div>

  <div class="box">
    <h2>Laporan Bulanan (<?= $laporan->bulan ?>)</h2>
    <ul>
      <?php foreach ($laporan->getTransaksiByBulan("Mei 2025") as $p): ?>
        <li>ID Pembayaran: <?= $p->pembayaranId ?> - Jumlah: Rp<?= number_format($p->jumlah, 0, ',', '.') ?> - Status: <?= $p->status ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
