<?php

class Transaction {
    public $transactionId;
    public $bookingId;
    public $total;
    public $komisi;

    public function __construct($transactionId, $bookingId, $total, $komisi = 0) {
        $this->transactionId = $transactionId;
        $this->bookingId = $bookingId;
        $this->total = $total;
        $this->komisi = $komisi;
    }
}