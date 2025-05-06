<?php
class Pemesanan {
    public $bookingId;
    public $itemId;
    public $userId;
    public $status;
    public $tanggal;

    public function __construct($bookingId, $itemId, $userId, $status, $tanggal) {
        $this->bookingId = $bookingId;
        $this->itemId = $itemId;
        $this->userId = $userId;
        $this->status = $status;
        $this->tanggal = $tanggal;
    }

    public function buatPemesanan() {
        return $this;
    }

    public function updateStatusBooking($aksi) {
        $this->status = $aksi;
        return true;
    }

    public function updateStatusPembatalan() {
        $this->status = "dibatalkan";
        return true;
    }

    public static function ambilDaftarBookingMilikPenyedia($idPenyedia) {
        return [new Pemesanan(1, 1, $idPenyedia, "disetujui", date("Y-m-d"))];
    }

    public static function ambilStatusBerdasarkanUserId($userId) {
        return "disetujui";
    }

    public function deletePemesanan() {
        return true;
    }
}
?>
