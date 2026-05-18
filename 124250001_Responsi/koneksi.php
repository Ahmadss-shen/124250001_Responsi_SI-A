<?php 
$conn = mysqli_connect ("localhost", "root", "", "perpusta");

if(!$conn){
    die("Koneksi Database gagal");
    exit();
}
?>