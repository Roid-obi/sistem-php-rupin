<?php

require_once __DIR__ . '/../models/Booking.php';
require_once __DIR__ . '/../data.php';

class BookingController {
    public function pesanItem($itemId, $penyewaId) {
        global $bookings;
        $bookingId = count($bookings) + 1;
        $booking = new Booking($bookingId, $penyewaId, $itemId);
        $bookings[$bookingId] = $booking;
        // Redirect atau tampilkan pesan sukses
        echo "Pesanan dengan ID {$bookingId} berhasil dibuat.";
    }

    public function lihatDetail($bookingId) {
        global $bookings, $items;
        if (isset($bookings[$bookingId])) {
            $booking = $bookings[$bookingId];
            $item = $items[$booking->itemId];
            include __DIR__ . '/../views/booking/detail.php';
        } else {
            echo "Booking tidak ditemukan.";
        }
    }

    public function lihatStatus($bookingId) {
        global $bookings;
        if (isset($bookings[$bookingId])) {
            $booking = $bookings[$bookingId];
            include __DIR__ . '/../views/booking/status.php';
        } else {
            echo "Booking tidak ditemukan.";
        }
    }

    public function batalkanPesanan($bookingId) {
        global $bookings;
        if (isset($bookings[$bookingId])) {
            $bookings[$bookingId]->status = 'dibatalkan';
            echo "Pesanan dengan ID {$bookingId} berhasil dibatalkan.";
        } else {
            echo "Booking tidak ditemukan.";
        }
    }
}