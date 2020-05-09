<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa</title>
</head>
<body>
    <h1>Tambah Barang untuk Di Sewakan</h1>
    <br>
    <br>
    <form action="controller.php?page=sewa" method="POST">

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

        <label for="fasil">Fasilitas Sewa</label>
        <input type="text" name="fasil">
        <br>

        <label for="syarat">Syarat Sewa</label>
        <input type="text" name="syarat">
        <br>

        <label for="lokasi">Lokasi Sewa</label>
        <input type="text" name="lokasi">
        <br>
        
        <input type="submit" value="Tambah">
    </form>
</body>
</html>