<?php

class Booking {
    public $bookingId;
    public $penyewaId;
    public $itemId;
    public $status;
    public $denda;

    public function __construct($bookingId, $penyewaId, $itemId, $status = 'pending', $denda = 0) {
        $this->bookingId = $bookingId;
        $this->penyewaId = $penyewaId;
        $this->itemId = $itemId;
        $this->status = $status;
        $this->denda = $denda;
    }
}