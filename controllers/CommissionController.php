<?php

require_once __DIR__ . '/../models/Transaction.php';
require_once __DIR__ . '/../data.php';

class CommissionController {
    public function prosesKomisi($transactionId) {
        global $transactions;
        if (isset($transactions[$transactionId])) {
            // Implementasi logika perhitungan komisi berdasarkan data transaksi
            // Contoh sederhana: komisi 10% dari total
            return $transactions[$transactionId]->total * 0.10;
        }
        return 0;
    }
}