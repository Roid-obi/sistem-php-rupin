<?php
class Pembayaran {
    public $pembayaranId;
    public $bookingId;
    public $jumlah;
    public $status;
    public $metode;

    public function __construct($pembayaranId, $bookingId, $jumlah, $status, $metode) {
        $this->pembayaranId = $pembayaranId;
        $this->bookingId = $bookingId;
        $this->jumlah = $jumlah;
        $this->status = $status;
        $this->metode = $metode;
    }

    public function simpanDataPembayaran() {
        // Simpan ke DB
    }

    public static function cekStatusPembayaran($idTransaksi) {
        return "sukses";
    }

    public function updateStatus($status) {
        $this->status = $status;
        return true;
    }
}
?>
