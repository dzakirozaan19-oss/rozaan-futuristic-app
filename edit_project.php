<?php

include "config/koneksi.php";

$id=$_GET['id'];

$data=mysqli_query(
$conn,
"SELECT * FROM portfolio
WHERE id='$id'"
);

$p=mysqli_fetch_array($data);

if(isset($_POST['update'])){

$judul=$_POST['judul'];

$deskripsi=$_POST['deskripsi'];

mysqli_query(

$conn,

"UPDATE portfolio SET

judul='$judul',

deskripsi='$deskripsi'

WHERE id='$id'"

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

<h2>Edit Project</h2>

<form method="POST">

<input
type="text"
name="judul"
value="<?= $p['judul']?>"
class="form-control mb-3">

<textarea
name="deskripsi"
class="form-control mb-3"><?= $p['deskripsi']?></textarea>

<button
name="update"
class="btn btn-warning">

Update

</button>

</form>

</div>

</body>

</html>