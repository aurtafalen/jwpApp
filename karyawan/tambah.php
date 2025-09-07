<?php include '../head.php'; ?>

<div class="container mt-4">
  <h3>Tambah Karyawan</h3>
  <form method="POST">
    <input type="number" name="nip" class="form-control mb-2" placeholder="nip" required>
    <input type="text" name="nama" class="form-control mb-2" placeholder="nama" required>
    <input type="date" name="tgl_lahir" class="form-control mb-2" placeholder="tanggal lahir" required>
    <input type="number" name="no_hp" class="form-control mb-2" placeholder="nomor hp" required>
    <input type="text" name="departemen" class="form-control mb-2" placeholder="departemen" required>
    <!-- <select name="role" class="form-control mb-2">
      <option value="staff">Staff</option>
      <option value="admin">Admin</option>
    </select> -->
    <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
  </form>
</div>

<?php
if (isset($_POST['simpan'])) {
  $n = $_POST['nip'];
  $na = $_POST['nama'];
  $t = $_POST['tgl_lahir'];
  $no = ($_POST['no_hp']);
  $d = $_POST['departemen'];

  mysqli_query($koneksi, "INSERT INTO karyawan(nip, nama, tgl_lahir, no_hp, departemen) VALUES('$n', '$na', '$t','$no','$d')");
  header("Location: index.php");
}
?>