<?php session_start();
    if(isset($_SESSION['username'])){
        header("Location: home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"></link>
    <style>
        .body{
            background-color: white;
        }
        .login-box{
            width:500px;
            margin-top: 150 px;
            background: 30px;
            border-radius: 10px;

        }
    </style>
</head>
<body>
    <div class="login.box">
        <h2 class="text-center mb-4"> PUSDIGIF </h2>
        <p class="text-center mb-4">Sistem perpustakaan informatika</p>

        <?php
        if (isset($_GET['error'])){
            echo"
            <div class='alert alert-warning'>
                username atau Pass salah!
            </div>";
        }
        if (isset($_GET['kosong'])){
            echo" 
            <div class='aler alert-warning'>
            </div>";
        }
        ?>
        <form action ="logincek.php" method="post">
            <div class ="mb-3">
                <label> Username</label>
                <input type="text" name="username" class="form-control"
            </div>
            <div class ="mb-3">
                <label> Password</label>
                <input type="password" name="password" class="form-control"
                <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
        </form>
    </div>
</body>
</html>