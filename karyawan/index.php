<?php include '../head.php'; ?>

<div class="container mt-4">
  <h3>Data Karyawan</h3>
  <a href="tambah.php" class="btn btn-primary mb-2">+ Tambah Karyawan</a>
  <table class="table table-bordered">
    <tr>
      <th>ID</th><th>NIP</th><th>Nama Karyawan</th><th>Tanggal Lahir</th><th>No HP</th><th>Departemen</th><th>Aksi</th>
    </tr>
    <?php
    $result = mysqli_query($koneksi, "SELECT * FROM karyawan");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['nip']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['tgl_lahir']."</td>
        <td>".$row['no_hp']."</td>
        <td>".$row['departemen']."</td>
        <td>
          <a href='edit.php?id=".$row['id']."' class='btn btn-sm btn-warning'>Edit</a>
          <a href='hapus.php?id=".$row['id']."' class='btn btn-sm btn-danger'
          onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
        </td>
      </tr>";
    }
    ?>
  </table>
</div>