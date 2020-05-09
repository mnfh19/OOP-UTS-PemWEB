<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli</title>
</head>
<body>
    <h1>Tambah Barang untuk Di Jual</h1>
    <br>
    <br>
    <form action="controller.php?page=beli" method="POST">

        <label for="nama">Nama Barang</label>
        <input type="text" name="nama">
        <br>

        <label for="tipe">Tipe Barang</label>
        <select name="tipe">
            <option value="Mobil">Mobil</option>
            <option value="Motor">Motor</option>
        </select>
        <br>

        <label for="desc">Desc Barang</label>
        <input type="text" name="desc">
        <br>

        <label for="lokasi">Lokasi Penjualan Barang</label>
        <input type="text" name="lokasi">
        <br>

        <label for="harga">Harga Barang</label>
        <input type="number" name="harga">
        <br>
        
        <input type="submit" value="Tambah">
    </form>
</body>
</html>