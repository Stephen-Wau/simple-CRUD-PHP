<?php
$nomor = 0;
if(isset($_GET['nomor'])){
    $nomor = $_GET['nomor'];
}else{
    header( 'location: index.php');
}


include_once('config/koneksi.php');

//Eksekusi Query

$query = "select * from klub_bola where nomor_punggung = '$nomor'";
$result = mysqli_query($db,$query);
$klub = [];
while($klb = mysqli_fetch_array($result)){
    $klub = $klb;
}
if(count($klub) === 0){
    header( 'location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boost/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Konfirmasi Delete</title>
</head>
<body>
<div class="container p-5 my-5 border">
<h3>Apakah anda ingin menghapus data ini?</h3>
        <form action="prosesHapus.php" method="POST">
            <table class="table table-sm table-striped table-bordered">
                <tr>
                    <td>Nomor</td>
                    <td><?= $klub['nomor_punggung'] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?= $klub['nama_pemain'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?= $klub['jk_pemain'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><?= $klub['dob_pemain'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?= $klub['alamat']?></td>
                </tr>
                <tr>
                    <td>Posisi</td>
                    <td><?= $klub['posisi']?></td>
                </tr>
            </table>
            <p></p>
            <input type="hidden" name="nomor" value="<?= $klub['nomor_punggung'] ?>">
            <a class="btn btn-secondary" href="index.php">Kembali</a>
            <input type="submit" value="Delete" class="btn btn-danger">

        </form>

</div>

</body>
</html>