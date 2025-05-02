<?php

class Item {
    public $id;
    public $nama;
    public $deskripsi;
    public $harga;

    public function __construct($id, $nama, $deskripsi, $harga) {
        $this->id = $id;
        $this->nama = $nama;
        $this->deskripsi = $deskripsi;
        $this->harga = $harga;
    }
}