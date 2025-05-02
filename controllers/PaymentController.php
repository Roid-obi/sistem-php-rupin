<?php

require_once __DIR__ . '/../models/Payment.php';
require_once __DIR__ . '/../data.php';

class PaymentController {
    public function bayar($bookingId, $metode, $jumlah) {
        global $payments;
        $paymentId = count($payments) + 1;
        $payment = new Payment($paymentId, $bookingId, $metode, $jumlah, 'lunas'); // Asumsi langsung lunas
        $payments[$paymentId] = $payment;
        include __DIR__ . '/../views/payment/konfirmasi.php';
    }

    public function validasiPembayaran($paymentId) {
        global $payments;
        if (isset($payments[$paymentId])) {
            return $payments[$paymentId]->status === 'lunas';
        }
        return false;
    }
}