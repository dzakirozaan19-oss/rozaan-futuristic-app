<?php

$host="localhost";
$user="root";
$password="";
$database="personal_profile";

$conn=mysqli_connect(
$host,
$user,
$password,
$database
);

if(!$conn){

die("Koneksi gagal");

}

?>