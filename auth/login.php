 <?php
// Mulai session
session_start();

// Include koneksi database
include "../config/koneksi.php";

// Jika tombol login ditekan
if (isset($_POST['login'])) {
    $nim = trim($_POST['nim']);
    $password = trim($_POST['password']);

    // Query cek user
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim' AND password='$password'");
    $data  = mysqli_fetch_assoc($query);

    if ($data) {
        // Simpan data user ke session
        $_SESSION['nim'] = $data['nim'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['level'] = 'user';

        // Redirect ke halaman dashboard user
        header("Location: ../user/dashboard.php");
        exit();
    } else {
        $error = "NIM atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Mahasiswa - SIAKAD UNRI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow-sm border-0">
          <div class="card-body p-4">
            <h3 class="text-center fw-bold mb-4 text-primary">Login Mahasiswa</h3>
            
            <?php if (!empty($error)) : ?>
              <div class="alert alert-danger py-2"><?= $error ?></div>
            <?php endif; ?>

            <form method="POST">
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
              </div>
              <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
            </form>

            <p class="text-center mt-3 mb-0">
              <small>Belum punya akun? <a href="register.php">Daftar di sini</a></small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

