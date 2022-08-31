<?php

include_once ('config/koneksi.php');

$result = mysqli_query($db, 'select * from klub_bola');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="boost/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
</head>
<body>

    <div class="container p-5 my-5 border">
    
    <h1>Data Tabel</h1> 
    <p></p>
    <a class="btn btn-primary" href="formTambah.php">INSERT</a>
    <p></p>
    <table class="table table-sm table-striped table-bordered">
        <tr>
            <th class="text-center">Nomor Punggung</th>
            <th class="text-center">Nama Pemain</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Tgl Lahir</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Posisi</th>
            <th class="text-center">Action</th>
        </tr>
        <?php
        while($klub = mysqli_fetch_array($result)){
            $dob = date('d F Y', strtotime($klub['dob_pemain']));
            ?>
            <tr>
                <td class="text-center"><?=$klub['nomor_punggung']?></td>
                <td class="text-center"><?=$klub['nama_pemain']?></td>
                <td class="text-center"><?=$klub['jk_pemain']?></td>
                <td class="text-center"><?=$dob?></td>
                <td class="text-center"><?=$klub['alamat']?></td>
                <td class="text-center"><?=$klub['posisi']?></td>
                <td class="text-center">
                <a href="formUbah.php?nomor=<?= $klub['nomor_punggung'] ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> </a> | 
                    <a href="konfirmasiHapus.php?nomor=<?= $klub['nomor_punggung'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                </td>
            </tr>
            <?php
         }
         ?>   
    </table>
    

    </div>


</body>
</html>
