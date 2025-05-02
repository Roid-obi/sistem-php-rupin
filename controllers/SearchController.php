<?php

require_once __DIR__ . '/../models/Item.php';
require_once __DIR__ . '/../data.php';

class SearchController {
    public function cariItem($kataKunci) {
        global $items;
        $hasil = [];
        foreach ($items as $item) {
            if (stripos($item['nama'], $kataKunci) !== false || stripos($item['deskripsi'], $kataKunci) !== false) {
                $hasil[] = new Item($item['id'], $item['nama'], $item['deskripsi'], $item['harga']);
            }
        }
        return $hasil;
    }

    public function tampilkanHasilPencarian($kataKunci) {
        $hasilPencarian = $this->cariItem($kataKunci);
        include __DIR__ . '/../views/item/list.php';
    }
}