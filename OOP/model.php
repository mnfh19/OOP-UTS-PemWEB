<?php

    include 'koneksi.php';

    session_start();

    class model extends koneksi{
        
        public $table;

        // set koneksi ke db & set tabel default
        function __construct($table){
            $this->db = $this->konek();
            $this->table = $table;
        }

        // bagian Saya Start

        //Insert ke table barang
        function barang($id, $tipe, $nama, $desc, $tgl){
            $q = "INSERT INTO $this->table VALUES ('', '$id','$tipe', '$nama', '$desc', '$tgl')";
            $result = $this->db->query($q);

            if($result){
                return mysqli_insert_id($this->db);
            }else {
                return false;
            }
        }

        // insert ke table beli
        function beli($barang, $harga, $lokasi, $status){
            $q = "INSERT INTO $this->table VALUES ('', '$barang','$harga', '$lokasi', '$status')";
            $result = $this->db->query($q);

            if($result){
                return true;
            }else {
                return false;
            }
        }

        // insert ke table sewa
        function sewa($barang, $fasil, $syarat, $lokasi, $status){
            $q = "INSERT INTO $this->table VALUES ('', '$barang','$fasil', '$syarat', '$lokasi', '$status')";
            $result = $this->db->query($q);

            if($result){
                return true;
            }else {
                return false;
            }
        }

        // ambil barang yang disewakan oleh user
        function get_sewa(){
            $id = $_SESSION['id_user'];
            $q = "SELECT tbl_sewa.id_sewa, tbl_barang.nama_barang, tbl_user.username, tbl_barang.tipe_barang, tbl_barang.desc_barang, tbl_sewa.fasilitas_sewa, tbl_sewa.syarat_sewa, tbl_sewa.lokasi_sewa
                    FROM tbl_user INNER JOIN (tbl_barang INNER JOIN tbl_sewa ON tbl_barang.id_barang = tbl_sewa.id_barang) ON tbl_user.id_user = tbl_barang.id_user
                    WHERE tbl_barang.id_user = '$id'";
            $result = $this->db->query($q);
            if($result->num_rows > 0){
                while ($obj = $result->fetch_object()) {
                    $data[] = $obj;
                }
                return $data;
            }else {
                return false;
            }
        }

        // bagian saya END


        // login
        function login($email, $pass){
            $q = "SELECT * FROM $this->table WHERE email='$email' AND password ='$pass'";
            $result = $this->db->query($q);

            if($result->num_rows > 0){
                while ($data = $result->fetch_object()) {
                    if($data->status_user == 1){
                        $_SESSION['login'] = true;
                        $_SESSION['id_user'] = $data->id_user;
                        $_SESSION['username'] = $data->username;
                        return true;
                    }else {
                        return false;
                    }   
                }
            }else {
                return false;
            }
        }

        // logout
        function logout(){
            session_destroy();
        }

        //ambil profile saya
        function get_where($idparam, $id){
            $q = "SELECT * FROM $this->table WHERE $idparam = '$id'";

            $result = $this->db->query($q);
            if($result->num_rows > 0){
                while ($obj = $result->fetch_object()) {
                    $data[] = $obj;
                }
                return $data;
            }else {
                return false;
            }
        }


    }


?>