<?php include '../head.php'; ?>
<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id=$id"));
?>

<div class="container mt-4">
  <h3>Edit Karyawan</h3>
  <form method="POST">
      <input type="number" name="nip" class="form-control mb-2" value="<?php echo $data['nip']; ?>" required>
      <input type="text" name="nama" class="form-control mb-2" value="<?php echo $data['nama']; ?>" required>
      <input type="date" name="tgl_lahir" class="form-control mb-2" value="<?php echo $data['tgl_lahir']; ?>" required>
      <input type="number" name="no_hp" class="form-control mb-2" value="<?php echo $data['no_hp']; ?>" required>
      <input type="texxt" name="departemen" class="form-control mb-2" value="<?php echo $data['departemen']; ?>" required>
    <button type="submit" name="update" class="btn btn-warning">Update</button>
  </form>
</div>

<?php
if (isset($_POST['update'])) {
  $n = $_POST['nip'];
  $na = $_POST['nama'];
  $t = $_POST['tgl_lahir'];
  $no = ($_POST['no_hp']);
  $d = $_POST['departemen'];

  mysqli_query($koneksi, "UPDATE karyawan SET nip='$n', nama='$na', tgl_lahir='$t', no_hp='$no', departemen='$d' WHERE id=$id");
  header("Location: index.php");
}
?>