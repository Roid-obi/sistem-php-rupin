<?php

require_once __DIR__ . '/../models/Item.php';
require_once __DIR__ . '/../models/ItemDetail.php';
require_once __DIR__ . '/../data.php';

class DetailController {
    public function lihatDetail($itemId) {
        global $items, $itemDetails;
        if (isset($items[$itemId]) && isset($itemDetails[$itemId])) {
            $item = new Item($items[$itemId]['id'], $items[$itemId]['nama'], $items[$itemId]['deskripsi'], $items[$itemId]['harga']);
            $itemDetail = new ItemDetail($itemDetails[$itemId]['itemId'], $itemDetails[$itemId]['harga'], $itemDetails[$itemId]['ketentuan']);
            include __DIR__ . '/../views/item/detail.php';
        } else {
            echo "Detail item tidak ditemukan.";
        }
    }
}