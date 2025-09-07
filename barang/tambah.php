<?php include '../head.php'; ?>

<div class="container mt-4">
  <h3>Tambah Barang</h3>
  <form method="POST">
    <input type="text" name="nama_barang" class="form-control mb-2" placeholder="nama barang" required>
    <input type="number" name="harga" class="form-control mb-2" placeholder="harga" required>
    <input type="number" name="stok" class="form-control mb-2" placeholder="stok" required>
    <!-- <select name="role" class="form-control mb-2">
      <option value="staff">Staff</option>
      <option value="admin">Admin</option>
    </select> -->
    <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
  </form>
</div>

<?php
if (isset($_POST['simpan'])) {
  $n = $_POST['nama_barang'];
  $h = ($_POST['harga']);
  $s = $_POST['stok'];

  mysqli_query($koneksi, "INSERT INTO barang(nama_barang, harga, stok) VALUES('$n', '$h', '$s')");
  header("Location: index.php");
}
?>