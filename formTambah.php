<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="boost/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Pemain</title>
</head>
<body>

<div class="container p-5 my-5 border">
        <h3>Form Tambah Data</h3>
        <form action="prosesTambah.php" method="GET">
            <p>
                <input type="number" class="form-control" name ="nomor_punggung" placeholder="Nomor Punggung" required>
            </p>
            <p>
                <input type="text" class="form-control" name ="nama_pemain" placeholder="Nama Pemain" required>
            </p>
            <p>
                <label for="">Jenis Kelamin</label>
                <select name="jk_pemain" class="form-control" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </p>
            <p>
                <label for="">Tanggal lahir</label>
                <input type="date" class="form-control" name="dob_pemain" placeholder="Tanggal Lahir Mahasiswa" required>
            </p>
            <p>
                <textarea class="form-control" name="alamat" placeholder="Alamat Pemain" cols="30" rows="5" required></textarea>
            </p>
            <p>
                <label for="">Posisi</label>
                <select class="form-control" name="posisi" required>
                    <option value="Striker">Striker</option>
                    <option value="Midfielder">Midfielder</option>
                    <option value="CenterBack">CenterBack</option>
                    <option value="GoalKeeper">GoalKeeper</option>
                </select>
            </p>
            <p>
                <a class="btn btn-info" href="index.php">Kembali</a>
                <button class="btn btn-success" type="submit">Simpan</button>
            </p>
        </form>
</div>


</body>
</html>


