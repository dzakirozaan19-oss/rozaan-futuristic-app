<?php
session_start();

include "config/koneksi.php";

if(isset($_POST['simpan'])){

$judul=$_POST['judul'];

$deskripsi=$_POST['deskripsi'];

$gambar=$_FILES['gambar']['name'];

move_uploaded_file(
$_FILES['gambar']['tmp_name'],
"images/".$gambar
);

mysqli_query(
$conn,

"INSERT INTO portfolio
(judul,deskripsi,gambar)

VALUES
('$judul','$deskripsi','$gambar')"

);

header("Location:dashboard.php");

}
?>

<!DOCTYPE html>
<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#050816;color:white;">

<div class="container mt-5">

<h2>Tambah Project</h2>

<form method="POST" enctype="multipart/form-data">

<input
type="text"
name="judul"
class="form-control mb-3"
placeholder="Judul Project"
required>

<textarea
name="deskripsi"
class="form-control mb-3"
placeholder="Deskripsi"
required></textarea>

<input
type="file"
name="gambar"
class="form-control mb-3"
required>

<button
name="simpan"
class="btn btn-info">

Simpan

</button>

</form>

</div>

</body>
</html>