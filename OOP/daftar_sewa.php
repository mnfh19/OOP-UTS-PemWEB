<?php
    include 'model.php';

    $id = $_SESSION['id_user'];
    $model = new model("tbl_paket");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewain</title>
</head>
<body>
<h1>Daftar Barang yang Disewakan</h1>
<br>
    <?php
        foreach ($model->get_sewa() as $d) {
    ?>
    <table>
        <tr>
            <th>Nama Barang</th>
            <td>:</td>
            <td><?php echo $d->nama_barang ?></td>
            
        </tr>
        <tr>
            <th>Username Penyewa</th>
            <td>:</td>
            <td><?php echo $d->username?></td>
        </tr>
        <tr>
            <th>Tipe Barang</th>
            <td>:</td>
            <td><?php echo $d->tipe_barang ?></td>
        </tr>
        <tr>
            <th>Deskripsi Barang</th>
            <td>:</td>
            <td><?php echo $d->desc_barang?></td>
        </tr>
        <tr>
            <th>Fasilitas Sewa</th>
            <td>:</td>
            <td><?php echo $d->fasilitas_sewa?></td>
        </tr>
        <tr>
            <th>Syarat Sewa</th>
            <td>:</td>
            <td><?php echo $d->syarat_sewa?></td>
        </tr>
        <tr>
            <th>Lokasi Penyewaan</th>
            <td>:</td>
            <td><?php echo $d->lokasi_sewa?></td>
        </tr>
        <tr>
            <th colspan="2"><h4>Paket Sewa : </h4></th>
        </tr>
        
        <?php
            foreach ($model->get_where("id_sewa", $d->id_sewa) as $e) {
        ?>
                <tr>
                    <th>Harga Paket</th>
                    <td>:</td>
                    <td><?php echo $e->harga_paket?></td>
                </tr>

                <tr>
                    <th>Waktu Penyewaan</th>
                    <td>:</td>
                    <td><?php echo $e->waktu_paket?></td>
                </tr>

                <tr>
                    <th>Ketersediaan</th>
                    <td>:</td>
                    <td><?php echo $e->ketersediaan_paket?></td>
                </tr>
                <tr>
                    <td><br></td>
                    <td> </td>
                    <td> </td>
                </tr>
        <?php
            }
            
        ?>
    </table>
            


    <?php
        }
    
    ?>
    
    
</body>
</html>