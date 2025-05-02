<?php

$items = [
    1 => ['id' => 1, 'nama' => 'Bor Listrik', 'deskripsi' => 'Bor listrik tegangan tinggi', 'harga' => 50000],
    2 => ['id' => 2, 'nama' => 'Gergaji Mesin', 'deskripsi' => 'Gergaji mesin untuk kayu', 'harga' => 75000],
    3 => ['id' => 3, 'nama' => 'Obeng Set', 'deskripsi' => 'Satu set obeng lengkap', 'harga' => 25000],
];

$itemDetails = [
    1 => ['itemId' => 1, 'harga' => 50000, 'ketentuan' => 'Tidak boleh digunakan untuk beton'],
    2 => ['itemId' => 2, 'harga' => 75000, 'ketentuan' => 'Gunakan pelindung mata'],
    3 => ['itemId' => 3, 'harga' => 25000, 'ketentuan' => 'Simpan di tempat kering'],
];

$bookings = [];
$payments = [];
$transactions = [];
$bookingStatuses = [];

$penyewas = [
    1 => ['id' => 1, 'nama' => 'Budi Penyewa', 'email' => 'budi@penyewa.com', 'password' => '123'],
    2 => ['id' => 2, 'nama' => 'Siti Penyewa', 'email' => 'siti@penyewa.com', 'password' => '456'],
];

$penyedias = [
    1 => ['id' => 1, 'nama' => 'Andi Penyedia', 'email' => 'andi@penyedia.com', 'password' => 'abc'],
    2 => ['id' => 2, 'nama' => 'Dewi Penyedia', 'email' => 'dewi@penyedia.com', 'password' => 'def'],
];

$admins = [
    1 => ['id' => 1, 'nama' => 'Admin RuPin', 'email' => 'admin@rupin.com', 'password' => 'admin'],
];