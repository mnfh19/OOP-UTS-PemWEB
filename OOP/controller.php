<?php

    include 'model.php';

    $page = $_GET['page'];

    // bagian Saya Start

    if($page == "beli"){
        date_default_timezone_set('Asia/Jakarta');

        $id = $_SESSION['id_user'];
        $nama = $_POST['nama'];
        $tipe = $_POST['tipe'];
        $desc = $_POST['desc'];
        $lokasi = $_POST['lokasi'];
        $harga = $_POST['harga'];
        $tgl = date('Y-m-d');
        $status = 0;

        $bar = new model("tbl_barang");
        $bel = new model("tbl_beli");

        $barang = $bar->barang($id, $tipe, $nama, $desc, $tgl);

        if($barang != false){
            $beli = $bel->beli($barang, $harga, $lokasi, $status);
            if($beli){
                header('location:index.php');
            }else {
                header('location:beli.php');
            }
            
        }else {
            header('location:beli.php');
        }
    }else if($page == "sewa"){
        date_default_timezone_set('Asia/Jakarta');

        $id = $_SESSION['id_user'];
        $nama = $_POST['nama'];
        $tipe = $_POST['tipe'];
        $desc = $_POST['desc'];
        $lokasi = $_POST['lokasi'];
        $fasil = $_POST['fasil'];
        $syarat = $_POST['syarat'];
        $tgl = date('Y-m-d');
        $status = 0;

        $bar = new model("tbl_barang");
        $sew = new model("tbl_sewa");

        $barang = $bar->barang($id, $tipe, $nama, $desc, $tgl);

        if($barang != false){
            $sewa = $sew->sewa($barang, $fasil, $syarat, $lokasi, $status);
            if($sewa){
                header('location:index.php');
            }else {
                header('location:sewa.php');
            }
            
        }else {
            header('location:sewa.php');
        }
    }

    // bagian saya END

    else if($page == "login"){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $table = "tbl_user";

        $model = new model($table);
        $log = $model->login($email, $pass);
        if($log){
            header('location:index.php');
        }else {
            header('location:login.php');
        }
    }else if($page == "logout"){
        $table = "tbl_user";
        $model = new model($table);
        $model->logout();
        header('location:login.php');
    }

    


?>