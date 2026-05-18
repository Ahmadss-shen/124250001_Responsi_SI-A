<?php session_start();
include'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == ""){
    header("Location: login.php?kosong");
    exit();
}
    $query = mysqli_query($conn, "SELECT FROM user WHERE nama='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        header("Location: login.php?eror");
        exit();
    }
?>