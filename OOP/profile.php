<?php
    include 'model.php';

    $id = $_SESSION['id_user'];
    $model = new model("tbl_user");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<h1>Profile Saya</h1>
<br>
    <?php
        foreach ($model->get_where("id_user", $id) as $d) {
    ?>
    <table>
        <tr>
            <th>Username</th>
            <td>:</td>
            <td><?php echo $d->username ?></td>
            
        </tr>
        <tr>
            <th>Email</th>
            <td>:</td>
            <td><?php echo $d->email ?></td>
        </tr>
        <tr>
            <th>No Telp</th>
            <td>:</td>
            <td><?php echo $d->no_telp?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td><?php echo $d->alamat?></td>
        </tr>
        <tr>
            <th>Tanggal Daftar</th>
            <td>:</td>
            <td><?php echo $d->tgl_daftar?></td>
        </tr>
        
    </table>



    <?php
        }
    
    ?>
    
</body>
</html>