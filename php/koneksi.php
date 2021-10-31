<?php
$password = "";
$nama_data_base="crud_db";

$koneksi= mysqli_connect("localhost", "root", $password, $nama_data_base);

if (!$koneksi){
    die('gagal melakukan koneksi');
}
?>