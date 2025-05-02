<?php

class AuthController {
    public function showLoginForm() {
        include __DIR__ . '/../views/auth/login.php';
    }

    public function login() {
        $role = $_POST['role'] ?? '';

        if ($role === 'penyewa' || $role === 'penyedia' || $role === 'admin') {
            // Simulasi login berhasil berdasarkan peran
            session_start();
            $_SESSION['user_id'] = 'simulasi_' . $role; // ID simulasi
            $_SESSION['role'] = $role;
            if ($role === 'penyewa') {
                header('Location: index.php?action=penyewaHome');
            } elseif ($role === 'penyedia') {
                header('Location: index.php?action=penyediaHome');
            } elseif ($role === 'admin') {
                header('Location: index.php?action=adminHome');
            }
            exit();
        } else {
            // Jika peran tidak valid
            echo "Peran tidak valid.";
            include __DIR__ . '/../views/auth/login.php'; // Tampilkan kembali form login
        }
    }

    public function penyewaHome() {
        include __DIR__ . '/../views/penyewa/home.php';
    }

    public function penyediaHome() {
        include __DIR__ . '/../views/penyedia/home.php';
    }

    public function adminHome() {
        include __DIR__ . '/../views/admin/home.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?action=login');
        exit();
    }
}