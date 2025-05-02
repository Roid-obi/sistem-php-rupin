<?php

require_once __DIR__ . '/../models/Booking.php';
require_once __DIR__ . '/../data.php';

class PenaltyController {
    public function cekDanHitungDenda($bookingId) {
        global $bookings;
        // Implementasi logika keterlambatan dan perhitungan denda di sini
        // Karena tidak ada informasi detail, kita asumsikan denda tetap 0 untuk sekarang
        if (isset($bookings[$bookingId])) {
            return $bookings[$bookingId]->denda;
        }
        return 0;
    }
}