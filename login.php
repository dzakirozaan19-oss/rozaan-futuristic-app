<!DOCTYPE html>
<html>

<head>

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{

height:100vh;

display:flex;

justify-content:center;
align-items:center;

background:#050816;

color:white;

}

.login-box{

width:400px;

padding:30px;

background:rgba(255,255,255,0.05);

backdrop-filter:blur(20px);

border-radius:20px;

box-shadow:
0 0 30px #00f7ff;

}

input{

background:transparent!important;

color:white!important;

}

h2{

text-align:center;

margin-bottom:20px;

text-shadow:0 0 20px #00f7ff;

}

</style>

</head>

<body>

<div class="login-box">

<h2>Admin Login</h2>

<form action="proses_login.php" method="POST">

<input
type="text"
name="username"
class="form-control mb-3"
placeholder="Username"
required>

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password"
required>

<button
class="btn btn-info w-100">

Login

</button>

</form>

</div>

</body>

</html>