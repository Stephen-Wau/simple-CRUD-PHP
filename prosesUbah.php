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
$query = "update klub_bola set nama_pemain='$nama', jk_pemain='$jk', dob_pemain='$dob', alamat='$alamat', posisi = '$posisi' where nomor_punggung='$nomor' ";
$result = mysqli_query($db,$query);

header( 'location: index.php');


