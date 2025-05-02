<?php

class ItemDetail {
    public $itemId;
    public $harga;
    public $ketentuan;

    public function __construct($itemId, $harga, $ketentuan) {
        $this->itemId = $itemId;
        $this->harga = $harga;
        $this->ketentuan = $ketentuan;
    }
}