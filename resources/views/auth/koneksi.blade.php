<?php 
$host="localhost";
$user="root";
$passsword="";
$db="ppid";

$con = mysqli_connect($host,$user,$password,$db);
if (!$conn) {
    die("Koneksi Gagal :". mysqli_connect_error());
}
?>