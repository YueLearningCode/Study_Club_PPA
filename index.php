<?php
session_start();

// Jika sudah login, arahkan langsung ke halaman sesuai role
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        header("Location: admin/dashboard.php");
        exit;
    } else if ($_SESSION['role'] == 'user') {
        header("Location: user/dashboard.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Akademik UNRI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height:100vh;">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Selamat Datang di SIAKAD UNRI GACOR</h2>
    <p class="text-muted mb-5">Silakan pilih login sebagai Admin atau Mahasiswa</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="admin/login.php" class="btn btn-primary px-4 py-2">Login Admin</a>
      <a href="user/login.php" class="btn btn-success px-4 py-2">Login Mahasiswa</a>
    </div>
  </div>
</body>
</html>

