<?php
//1. ambil semua parameter yg dikirim lewat form
$nomor = $_GET['nomor_punggung'];
$nama = $_GET['nama_pemain'];
$jk = $_GET['jk_pemain'];
$dob = $_GET['dob_pemain'];
$alamat = $_GET['alamat'];
$posisi = $_GET['posisi'];

//2. panggil settingan database
include_once('config/koneksi.php');

//Eksekusi Query

$query = "insert into klub_bola values('$nomor','$nama','$jk','$dob','$alamat','$posisi')";
$result = mysqli_query($db,$query);

header( 'location: index.php');

