<!DOCTYPE html>
<html>

<head>

<title>Contact</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#050816;
color:white;
}

.box{

width:600px;

margin:auto;

margin-top:100px;

padding:30px;

background:rgba(255,255,255,0.05);

backdrop-filter:blur(15px);

border-radius:20px;

box-shadow:0 0 30px #00f7ff;

}

</style>

</head>

<body>

<div class="box">

<h2 class="text-center">
Contact Me
</h2>

<form action="simpan_pesan.php" method="POST">

<input
type="text"
name="nama"
class="form-control mb-3"
placeholder="Nama"
required>

<input
type="email"
name="email"
class="form-control mb-3"
placeholder="Email"
required>

<textarea
name="pesan"
class="form-control mb-3"
placeholder="Pesan"
required></textarea>

<button class="btn btn-info w-100">

Kirim

</button>

</form>

</div>

</body>
</html>