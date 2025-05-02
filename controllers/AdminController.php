<?php

require_once __DIR__ . '/../models/Booking.php';
require_once __DIR__ . '/../models/Transaction.php';
require_once __DIR__ . '/../data.php';

class AdminController {
    public function konfirmasiPesanan($bookingId) {
        global $bookings;
        if (isset($bookings[$bookingId]) && $bookings[$bookingId]->status === 'pending') {
            $bookings[$bookingId]->status = 'dikirim';
            echo "Pesanan dengan ID {$bookingId} telah dikonfirmasi.";
        } else {
            echo "Pesanan tidak ditemukan atau sudah dikonfirmasi.";
        }
    }

    public function kelolaTransaksi($bookingId) {
        global $bookings, $transactions, $items;
        if (isset($bookings[$bookingId])) {
            $booking = $bookings[$bookingId];
            $item = $items[$booking->itemId];
            $transactionId = count($transactions) + 1;
            $total = $item['harga']; // Harga dasar
            $transaction = new Transaction($transactionId, $bookingId, $total);
            $transactions[$transactionId] = $transaction;
            include __DIR__ . '/../views/admin/transaksi.php';
        } else {
            echo "Booking tidak ditemukan.";
        }
    }

    public function hitungKomisi($transactionId) {
        $commissionController = new CommissionController();
        return $commissionController->prosesKomisi($transactionId);
    }
}