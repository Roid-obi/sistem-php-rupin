<?php
class Item {
    public $itemId;
    public $nama;
    public $tipe;
    public $jumlah;
    public $lokasi;
    public $status;

    public function __construct($itemId, $nama, $tipe, $jumlah, $lokasi, $status) {
        $this->itemId = $itemId;
        $this->nama = $nama;
        $this->tipe = $tipe;
        $this->jumlah = $jumlah;
        $this->lokasi = $lokasi;
        $this->status = $status;
    }

    public function simpanItemBaru() {
        return true;
    }

    public function updateItem($dataBaru) {
        foreach ($dataBaru as $key => $value) {
            $this->$key = $value;
        }
        return true;
    }

    public function deleteItem() {
        return true;
    }

    public static function getItemById($itemId) {
        return new Item($itemId, "Proyektor", "Elektronik", 2, "Gedung A", "tersedia");
    }

    public static function getAllItems() {
        return [
            new Item(1, "Proyektor", "Elektronik", 3, "Gedung A", "tersedia"),
            new Item(2, "Meja", "Furnitur", 5, "Gedung B", "tersedia")
        ];
    }

    public static function cariItemBerdasarkanKataKunci($kataKunci) {
        return [new Item(3, "Speaker", "Elektronik", 1, "Ruang Audio", "tersedia")];
    }

    public function cekKetersediaan() {
        return $this->jumlah > 0 && $this->status === "tersedia";
    }
}
?>
