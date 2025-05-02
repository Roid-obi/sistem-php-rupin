<?php

class Penyewa {
    public $id;
    public $nama;
    public $email;
    public $password;

    public function __construct($id, $nama, $email, $password) {
        $this->id = $id;
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }
}