<?php
class User {
    public $nama;
    public $email;
    public $password;
    public $role;
    public $status;
    public $alamat;

    public function __construct($nama, $email, $password, $role, $status, $alamat) {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->status = $status;
        $this->alamat = $alamat;
    }

    public function validateLogin($username, $password) {
        // Contoh validasi sederhana
        return $this->email === $username && $this->password === $password;
    }

    public function saveUser() {
        // Simpan ke database
        return true;
    }

    public function updateUser($dataBaru) {
        foreach ($dataBaru as $key => $value) {
            $this->$key = $value;
        }
        return true;
    }

    public function deleteUser() {
        // Hapus dari database
        return true;
    }

    public static function getUserById($userId) {
        return new User("Contoh", "email@example.com", "123456", "user", "aktif", "Alamat");
    }

    public static function getAllUsers() {
        return [
            new User("User1", "u1@example.com", "123", "admin", "aktif", "alamat"),
            new User("User2", "u2@example.com", "123", "user", "aktif", "alamat")
        ];
    }
}
?>
