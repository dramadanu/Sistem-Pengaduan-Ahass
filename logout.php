<?php
// Mulai session jika belum dimulai
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai setelah logout
header("Location: login.php"); // Ganti dengan halaman yang sesuai setelah logout
exit();
?>
