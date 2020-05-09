<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PemWeb</title>
</head>
<body>
    <?php
        if($_SESSION['login'] == false)
        {
            header("Location: login.php");
            exit;
        }else{
    ?>
    
        <h1>Selamat Datang <?php echo $_SESSION['username']?></h1>
        <a href="profile.php">Profile</a>
        <br>
        <a href="daftar_sewa.php">Sewa Barang</a>
        <br>
        <a href="sewa.php">Tambah Barang untuk Disewakan</a>
        <br>
        <a href="beli.php">Tambah Barang untuk Di Jual</a>
        <br>
        <a href="controller.php?page=logout">Logout</a>

    <?php
        }
    ?>
    

    
</body>
</html>