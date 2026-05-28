<?php

session_start();

include "config/koneksi.php";

$username=$_POST['username'];

$password=$_POST['password'];

$query=mysqli_query(
$conn,
"SELECT * FROM admin
WHERE username='$username'
AND password='$password'"
);

$cek=mysqli_num_rows($query);

if($cek>0){

$_SESSION['admin']=$username;

header("Location:dashboard.php");

}else{

echo "Login gagal";

}

?>