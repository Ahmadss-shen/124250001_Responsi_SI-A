<?php session_start();
include'koneksi.php';

if(!isset($_SESSION['username'])){
    header("Location.php");
    exit();

    if(isset($_POST['tambah']));
    $kode =$_POST[kode_buku];
    $judul=$_POST[judul_buku];
    $pengarang=$_POST[pengarang];
    $kategori=$_POST[kategori];
    $stok=$_POST[stok];

    mysqli_query($conn, "INSERT INTO buku VALUES ('', '$kode', '$judul', '$pengarang','$kategori','$stok')");
    header("Location: home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"></link>
    <link rell="stylesheet" href="s"> 
</head>
<body>
    <nav class="navbar-expand-navbar-dark bg-primary">
        <a class="container-fluid d-flex" href="home.php">PUSDIGIF</a>
        <div class="navbar-nav d-flex flex-row">
            <a class="nav-link active ms-3" href="home.php">koleksi</a>
            <a class="nav-link ms-3" href="peminjaman.php">peminjaman</a>
        </div>
        <a href="logout.php"></a>
    </nav>
     <h1>Koleksi Buku</h1>
     <div class="table-box">
        <div class="text-end mb-3">
            <a href="#form-tambah" class="btn btn-secondary">+Tambah</a>
        </div>

        <table class="table">
            <thead class="table-primary">
            <tr>
                <td>Kode</td>
                <td>Judul</td>
                <td>Pengarang</td>
                <td>Kategori</td>
                <td>sStok</td>
                <td>Status</td>
                <td>Aksi</td>
            </tr> 
            </thead>
            <tbody> <?php $query = mysqli_query($conn, "SELECT * FROM buku");
                while($data = mysqli_fetch_array($query)){
                    if($data['stok'] == 0){
                    $status = "Habis";
                } else if ($data = mysqli_fetch_array($query))
                    if($data['stok'] <= 5){
                    $status = "Menipis";
                } else {
                    $status = "Tersedia";
                }
                ?>
            }
        
            </tbody>
        </table>
     </div>
</body>
</html>