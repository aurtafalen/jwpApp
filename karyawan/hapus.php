<?php include '../head.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM karyawan WHERE id=$id");
header("Location: index.php");
?>