<?php
$nomor = 0;
//memeriksa apakah ada parameter dgn nama nim
if(isset($_POST['nomor'])){
    $nomor = $_POST['nomor'];
}else{
    header( 'location: index.php');
}

//panggil settingan database
include_once('config/koneksi.php');

//Eksekusi Query
$query = "delete from klub_bola where nomor_punggung = '$nomor'";
$result = mysqli_query($db,$query);

header( 'location: index.php');