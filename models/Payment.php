<?php

class Payment {
    public $paymentId;
    public $bookingId;
    public $metode;
    public $jumlah;
    public $status;

    public function __construct($paymentId, $bookingId, $metode, $jumlah, $status = 'pending') {
        $this->paymentId = $paymentId;
        $this->bookingId = $bookingId;
        $this->metode = $metode;
        $this->jumlah = $jumlah;
        $this->status = $status;
    }
}