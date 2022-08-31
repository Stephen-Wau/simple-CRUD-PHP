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
    <title>Form Ubah Pemain</title>
</head>
<body>

    <div class="container p-5 my-5 border">
    <h3>Form Ubah Data</h3>
        <form action="prosesUbah.php" method="GET" class="form-group">
            <p>
                <input type="number" value="<?= $klub['nomor_punggung'] ?>" name ="nomor_punggung" placeholder="Nomor Pemain" class="form-control" required readonly>
            </p>
            <p>
                <input type="text" value="<?= $klub['nama_pemain'] ?>" name ="nama_pemain" placeholder="Nama Pemain" class="form-control" required>
            </p>
            <p>
                <select name="jk_pemain" class="form-control" required>
                    <?php
                    $sL = $klub['jk_pemain'] === 'L' ? 'selected' : '';
                    $sP = $klub['jk_pemain'] === 'P' ? 'selected' : '';
                    ?>
                    <option <?= $sL ?> value="Laki-Laki">Laki-Laki</option>
                    <option <?= $sP ?> value="Perempuan">Perempuan</option>
                </select>
            </p>
            <p>
                <input type="date" value="<?= $klub['dob_pemain'] ?>" name="dob_pemain" placeholder="Tanggal Lahir Pemain" class="form-control" required>
            </p>
            <p>
                <textarea name="alamat" placeholder="Alamat Pemain" cols="30" rows="5" class="form-control" required><?= $klub['alamat']?></textarea>
            </p>
            <p>
                <select name="posisi" class="form-control" required>
                    <?php
                    $sS = $klub['posisi'] === 'Striker' ? 'selected' : '';
                    $sM = $klub['posisi'] === 'Midfielder' ? 'selected' : '';
                    $sC = $klub['posisi'] === 'CenterBack' ? 'selected' : '';
                   $sG = $klub['posisi'] === 'GoalKeeper' ? 'selected' : '';
                    ?>
                    <option <?= $sS ?> value="Striker">Striker</option>
                    <option <?= $sM ?> value="Midfielder">Midfielder</option>
                    <option <?= $sC ?> value="CenterBack">CenterBack</option>
                    <option <?= $sG ?> value="GoalKeeper">GoalKeeper</option>
                </select>
            </p>
            <p>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-warning" type="submit">Simpan</button>
            </p>
        </form>
    </div>

   
</body>
</html>