<?php
class LaporanBulanan {
    public $bulan;
    public $daftarTransaksi;

    public function __construct($bulan, $daftarTransaksi = []) {
        $this->bulan = $bulan;
        $this->daftarTransaksi = $daftarTransaksi;
    }

    public function generateLaporan() {
        return $this;
    }

    public function getTransaksiByBulan($bulan) {
        return $this->daftarTransaksi;
    }
}
?>
