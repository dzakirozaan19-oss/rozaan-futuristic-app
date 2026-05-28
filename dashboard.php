<script>
function updateTime(){

let now = new Date();

let jam = now.toLocaleTimeString();

let tanggal = now.toDateString();

document.getElementById("jam").innerHTML = jam;

document.getElementById("tanggal").innerHTML = tanggal;

}

setInterval(updateTime,1000);
updateTime();
</script>

<?php

session_start();

include "config/koneksi.php";

if(!isset($_SESSION['admin'])){
header("Location:login.php");
}

$data=mysqli_query($conn,"SELECT * FROM kontak");

$totalPesan=mysqli_num_rows($data);

?>



<!DOCTYPE html>
<html>

<head>

<title>Dashboard Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#050816;
color:white;
}

.card-box{

background:rgba(255,255,255,.05);

backdrop-filter:blur(15px);

border-radius:20px;

padding:25px;

box-shadow:0 0 20px #00f7ff;

margin-bottom:20px;
}

h1{

text-shadow:
0 0 20px #00f7ff;

}

.table{

border-radius:20px;
overflow:hidden;

}

</style>

</head>

<body>

<div class="container mt-5">

<div class="d-flex justify-content-between">

<h1 class="glitch">CYBER DASHBOARD</h1>

<h3 id="jam" style="color:#00f7ff;text-shadow:0 0 15px #00f7ff;"></h3>
<p id="tanggal" style="color:white;"></p>

<a href="logout.php"
class="btn btn-danger">

Logout

</a>

<a href="tambah_project.php"
class="btn btn-info">

Tambah Project

</a>

</div>

<br>

<div class="row">

<div class="col-md-4">

<div class="card-box">

<h4>Total Pesan</h4>

<h2>
<?= $totalPesan ?>
</h2>

</div>

</div>

<div class="col-md-4">

<div class="card-box">

<h4>Total Project</h4>

<h2>2</h2>

</div>

</div>

<div class="col-md-4">

<div class="card-box">

<h4>Status</h4>

<h2>Online</h2>

</div>

</div>

</div>

<div class="card-box">

<h3>Pesan Masuk</h3>

<table class="table table-dark">

<tr>

<th>Nama</th>
<th>Email</th>
<th>Pesan</th>

</tr>

<?php while($row=mysqli_fetch_array($data)){ ?>

<tr>

<td><?= $row['nama']?></td>

<td><?= $row['email']?></td>

<td><?= $row['pesan']?></td>

</tr>

<?php } ?>

</table>

<hr>

<h3>Project Saya</h3>

<?php

$project=mysqli_query(
$conn,
"SELECT * FROM portfolio"
);

while($p=mysqli_fetch_array($project)){

?>

<div class="card-box">
<h4>Total Project</h4>
<h2>
<?php
$proj=mysqli_query($conn,"SELECT * FROM portfolio");
echo mysqli_num_rows($proj);
?>
</h2>
</div>

<img
src="images/<?= $p['gambar']?>"
width="200">

<h4>
<?= $p['judul'] ?>
</h4>

<p>
<?= $p['deskripsi'] ?>
</p>

<a
href="edit_project.php?id=<?= $p['id']?>"
class="btn btn-warning">

Edit

</a>

<a
href="hapus_project.php?id=<?= $p['id']?>"
class="btn btn-danger">

Hapus

</a>

</div>

<?php } ?>

</div>

</div>

</body>
</html>