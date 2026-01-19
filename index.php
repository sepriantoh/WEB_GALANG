<?php
$host      = "localhost";
$user      = "root";
$pass      = "";
$db        = "akademik";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke databes");
}
$nim       = "";
$nama      = "";
$alamat    = "";
$Falkutasi = "";
$sukses    = "";
$error     = "";

if (isset($_POST['simpan'])) {
    $nim         = $_POST['nim'];
    $nama        = $_POST['nama'];
    $alamat      = $_POST['alamat'];
    $Falkutasi   = $_POST['falkutasi'];

    if ($nim && $nama && $alamat && $Falkutasi) {
        $sql1 = "insert into mahasiswa3(nim,nama,alamat,falkutasi) values ('$nim','$nama','$alamat','$Falkutasi')";
        $q1   = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses   = "berhasil memasukan data baru";
        } else {
            $error   = "Gagal memasukan data";
        }
        }else{
            $error = "Silahkan masukan semua data";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!--untuk memasukan data -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                 <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fakultasi" class="col-sm-2 col-form-label">Falkutasi</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="falkutasi" id="falkutasi">
                                <option value="">- Pilih Falkutasi</option>
                                <option value="saimtek" <?php if ($Falkutasi == "saintek") echo "selected" ?>>saintek</option>
                                <option value="soshum" <?php if ($Falkutasi == "soshum") echo "selected" ?>>soshum</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
        <!--untuk mengeluarkan gata -->
        <div class="card">
            <div class="card-header text-whit  bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</body>

</html>