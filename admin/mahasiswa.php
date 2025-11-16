 
<?php



// TAMBAH DATA
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $angkatan = $_POST['angkatan'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, jurusan, alamat, angkatan) 
                            VALUES ('$nim', '$nama', '$jurusan', '$alamat', '$angkatan')");
    header("Location: mahasiswa.php");
}

// EDIT DATA
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $angkatan = $_POST['angkatan'];

    mysqli_query($koneksi, "UPDATE mahasiswa SET 
                            nim='$nim', nama='$nama', jurusan='$jurusan', 
                            alamat='$alamat', angkatan='$angkatan' 
                            WHERE id='$id'");
    header("Location: mahasiswa.php");
}

// HAPUS DATA
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");
    header("Location: mahasiswa.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Admin SIAKAD</a>
  </div>
</nav>

<div class="container-fluid mt-4">
  <div class="row">
    <!-- SIDEBAR -->
    <div class="col-md-2 bg-white shadow-sm p-3" style="min-height: 100vh;">
      <h5 class="text-primary">Menu</h5>
      <hr>
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link active fw-bold" href="mahasiswa.php">Data Mahasiswa</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Dosen</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Mata Kuliah</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Nilai</a></li>
      </ul>
    </div>

    <!-- KONTEN UTAMA -->
    <div class="col-md-10">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">Data Mahasiswa</h4>
        </div>
        <div class="card-body">

          <!-- Tombol Tambah -->
          <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
            + Tambah Mahasiswa
          </button>

          <!-- Tabel Mahasiswa -->
          <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Angkatan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jurusan'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['angkatan'] ?></td>
                <td>
                  <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row['id'] ?>">Edit</button>
                  <a href="?hapus=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
              </tr>

              <!-- Modal Edit -->
              <div class="modal fade" id="modalEdit<?= $row['id'] ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form method="post">
                      <div class="modal-header bg-warning text-dark">
                        <h5 class="modal-title">Edit Mahasiswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="mb-3">
                          <label>NIM</label>
                          <input type="text" name="nim" value="<?= $row['nim'] ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                          <label>Nama</label>
                          <input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                          <label>Jurusan</label>
                          <input type="text" name="jurusan" value="<?= $row['jurusan'] ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control"><?= $row['alamat'] ?></textarea>
                        </div>
                        <div class="mb-3">
                          <label>Angkatan</label>
                          <input type="number" name="angkatan" value="<?= $row['angkatan'] ?>" class="form-control">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Tambah Mahasiswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control">
          </div>
          <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label>Angkatan</label>
            <input type="number" name="angkatan" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer class="text-center mt-4 mb-3 text-muted">
  <small>© 2025 SIAKAD Universitas Riau</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
