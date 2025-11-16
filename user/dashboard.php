 <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Mahasiswa - SIAKAD</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">SIAKAD UNRI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Jadwal</a></li>
          <li class="nav-item"><a class="nav-link" href="#">KHS</a></li>
          <li class="nav-item"><a class="nav-link" href="#">KRS</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten Utama -->
  <div class="container my-4">
    <!-- Profil Mahasiswa -->
    <div class="card shadow-sm mb-4">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Profil Mahasiswa</h5>
      </div>
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-md-3 text-center">
            <img src="https://via.placeholder.com/120" class="rounded-circle mb-2" alt="Foto Mahasiswa">
            <h6 class="fw-bold">Ahmad Syarhan</h6>
            <p class="text-muted mb-0">D3 Manajemen Informatika</p>
          </div>
          <div class="col-md-9">
            <table class="table table-borderless">
              <tr><th width="30%">NIM</th><td>230101001</td></tr>
              <tr><th>Semester</th><td>3 (Ganjil 2025/2026)</td></tr>
              <tr><th>IPK Terakhir</th><td><span class="badge bg-success">3.45</span></td></tr>
              <tr><th>Status</th><td><span class="badge bg-primary">Aktif</span></td></tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Jadwal Kuliah -->
    <div class="card shadow-sm mb-4">
      <div class="card-header bg-info text-white">
        <h5 class="mb-0">Jadwal Kuliah Hari Ini</h5>
      </div>
      <div class="card-body">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>Jam</th>
              <th>Mata Kuliah</th>
              <th>Dosen</th>
              <th>Ruang</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>08:00 - 09:40</td>
              <td>Algoritma & Pemrograman</td>
              <td>Drs. Budi Santoso, M.Kom</td>
              <td>Lab Komputer 1</td>
            </tr>
            <tr>
              <td>10:00 - 11:40</td>
              <td>Basis Data</td>
              <td>Siti Aulia, M.Kom</td>
              <td>Ruang D204</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Nilai Akademik -->
    <div class="card shadow-sm mb-4">
      <div class="card-header bg-success text-white">
        <h5 class="mb-0">Nilai Akademik (KHS)</h5>
      </div>
      <div class="card-body">
        <table class="table table-striped align-middle">
          <thead class="table-success">
            <tr>
              <th>Kode MK</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>Nilai</th>
              <th>Bobot</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>IF101</td>
              <td>Algoritma dan Pemrograman</td>
              <td>3</td>
              <td>A</td>
              <td>4.00</td>
            </tr>
            <tr>
              <td>IF102</td>
              <td>Matematika Diskrit</td>
              <td>2</td>
              <td>B+</td>
              <td>3.50</td>
            </tr>
            <tr>
              <td>IF103</td>
              <td>Pengantar Basis Data</td>
              <td>3</td>
              <td>A</td>
              <td>4.00</td>
            </tr>
          </tbody>
        </table>
        <div class="text-end">
          <strong>Total SKS:</strong> 8 &nbsp;&nbsp; | &nbsp;&nbsp;
          <strong>IP Semester:</strong> <span class="text-success fw-bold">3.83</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-3">
    <p class="mb-0">© 2025 Sistem Informasi Akademik - Universitas Riau</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

