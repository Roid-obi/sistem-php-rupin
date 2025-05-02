<?php
session_start(); // Mulai sesi di setiap halaman

require_once __DIR__ . '/controllers/SearchController.php';
require_once __DIR__ . '/controllers/DetailController.php';
require_once __DIR__ . '/controllers/BookingController.php';
require_once __DIR__ . '/controllers/PaymentController.php';
require_once __DIR__ . '/controllers/PenaltyController.php';
require_once __DIR__ . '/controllers/CommissionController.php';
require_once __DIR__ . '/controllers/AdminController.php';
require_once __DIR__ . '/controllers/AuthController.php';

$searchController = new SearchController();
$detailController = new DetailController();
$bookingController = new BookingController();
$paymentController = new PaymentController();
$adminController = new AdminController();
$authController = new AuthController();

$action = $_GET['action'] ?? 'login'; // Halaman login sebagai default

// Middleware sederhana untuk memeriksa apakah pengguna sudah login
function isLoggedIn() {
    return isset($_SESSION['user_id']) && isset($_SESSION['role']);
}

// Middleware sederhana untuk memeriksa peran pengguna
function checkRole($role) {
    return isLoggedIn() && $_SESSION['role'] === $role;
}

switch ($action) {
    case 'login':
        if (isLoggedIn()) {
            // Redirect ke halaman home sesuai peran jika sudah login
            if (checkRole('penyewa')) {
                header('Location: index.php?action=penyewaHome');
            } elseif (checkRole('penyedia')) {
                header('Location: index.php?action=penyediaHome');
            } elseif (checkRole('admin')) {
                header('Location: index.php?action=adminHome');
            }
            exit();
        }
        $authController->showLoginForm();
        break;
    case 'prosesLogin': // Action dari form login
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'penyewaHome':
        if (checkRole('penyewa')) {
            $authController->penyewaHome();
        } else {
            echo "Akses ditolak.";
        }
        break;
    case 'penyediaHome':
        if (checkRole('penyedia')) {
            $authController->penyediaHome();
        } else {
            echo "Akses ditolak.";
        }
        break;
    case 'adminHome':
        if (checkRole('admin')) {
            $authController->adminHome();
        } else {
            echo "Akses ditolak.";
        }
        break;
    case 'cariItem':
        if (isLoggedIn() && checkRole('penyewa')) {
            $kataKunci = $_GET['kataKunci'] ?? '';
            $searchController->tampilkanHasilPencarian($kataKunci);
        } else {
            echo "Anda harus login sebagai penyewa untuk mengakses fitur ini.";
        }
        break;
    case 'lihatDetailItem':
        if (isLoggedIn() && checkRole('penyewa')) {
            $itemId = $_GET['id'] ?? null;
            if ($itemId) {
                $detailController->lihatDetail($itemId);
            } else {
                echo "ID Item tidak valid.";
            }
        } else {
            echo "Anda harus login sebagai penyewa untuk mengakses fitur ini.";
        }
        break;
    case 'pesanItem':
        if (isLoggedIn() && checkRole('penyewa')) {
            $itemId = $_GET['id'] ?? null;
            $penyewaId = $_SESSION['user_id']; // Ambil ID penyewa dari sesi
            if ($itemId) {
                $bookingController->pesanItem($itemId, $penyewaId);
            } else {
                echo "ID Item tidak valid.";
            }
        } else {
            echo "Anda harus login sebagai penyewa untuk mengakses fitur ini.";
        }
        break;
    case 'lihatDetailBooking':
        if (isLoggedIn()) {
            $bookingId = $_GET['id'] ?? null;
            if ($bookingId) {
                $bookingController->lihatDetail($bookingId);
            } else {
                echo "ID Booking tidak valid.";
            }
        } else {
            echo "Anda harus login untuk mengakses fitur ini.";
        }
        break;
    case 'lihatStatusBooking':
        if (isLoggedIn()) {
            $bookingId = $_GET['id'] ?? null;
            if ($bookingId) {
                $bookingController->lihatStatus($bookingId);
            } else {
                echo "ID Booking tidak valid.";
            }
        } else {
            echo "Anda harus login untuk mengakses fitur ini.";
        }
        break;
    case 'batalkanPesanan':
        if (isLoggedIn() && checkRole('penyewa')) {
            $bookingId = $_GET['id'] ?? null;
            if ($bookingId) {
                $bookingController->batalkanPesanan($bookingId);
            } else {
                echo "ID Booking tidak valid.";
            }
        } else {
            echo "Anda harus login sebagai penyewa untuk mengakses fitur ini.";
        }
        break;
    case 'bayar':
        if (isLoggedIn() && checkRole('penyewa')) {
            $bookingId = $_POST['bookingId'] ?? null;
            $metode = $_POST['metode'] ?? '';
            $jumlah = $_POST['jumlah'] ?? 0;
            if ($bookingId) {
                $paymentController->bayar($bookingId, $metode, $jumlah);
            } else {
                echo "ID Booking tidak valid.";
            }
        } else {
            echo "Anda harus login sebagai penyewa untuk mengakses fitur ini.";
        }
        break;
    case 'konfirmasiPesanan':
        if (isLoggedIn() && checkRole('admin')) {
            $orderId = $_GET['id'] ?? null;
            if ($orderId) {
                $adminController->konfirmasiPesanan($orderId);
            } else {
                echo "ID Pesanan tidak valid.";
            }
        } else {
            echo "Anda harus login sebagai admin untuk mengakses fitur ini.";
        }
        break;
    case 'kelolaTransaksi':
        if (isLoggedIn() && checkRole('admin')) {
            $bookingId = $_GET['id'] ?? null;
            if ($bookingId) {
                $adminController->kelolaTransaksi($bookingId);
            } else {
                echo "ID Booking tidak valid.";
            }
        } else {
            echo "Anda harus login sebagai admin untuk mengakses fitur ini.";
        }
        break;
    case 'hitungKomisi':
        if (isLoggedIn() && checkRole('admin')) {
            $transactionId = $_GET['id'] ?? null;
            if ($transactionId) {
                echo "Komisi: Rp " . number_format($adminController->hitungKomisi($transactionId), 0, ',', '.');
            } else {
                echo "ID Transaksi tidak valid.";
            }
        } else {
            echo "Anda harus login sebagai admin untuk mengakses fitur ini.";
        }
        break;
    default:
        echo "Halaman tidak ditemukan.";
        break;
}

?>
            