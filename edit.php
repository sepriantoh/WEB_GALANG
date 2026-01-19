<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit mahasiswa</title>
</head>
<body>
    <?php
    include 'koneksi.php';
    $nim = $_GET['nim'];
    $sql = "SELECT * FROM mahasiswa WHERE NIM ='$nim'";
    $hasil = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($hasil);
    ?>
<h2>edit data mahasiswa </h2>

<form action="proses_edit.php" METHOD = "POST">
  <label for="fNIM">NIM:</label><br>
  <input type="number" id="NIM" name="NIM" value="<?php echo $data['NIM']; ?>" readonly>
  <br>

  <label for="nama">nama:</label><br>
  <input type="text" id="nama" name="nama" value="<?php echo $data['NAMA']; ?>">
  <br>

  <label for="alamat">Alamat:</label><br>
  <input type="text" id="alamat" name="alamat" value="<?php echo $data['ALAMAT']; ?>">
  <br><br>

  <label for="nama">jenis kelamin:</label><br>
  <select id="jkl" name="jkl">
  <option velue="<?php echo $data['JKEL']; ?>"><?php echo $data['JKEL']; ?></option>
  <option velue="laki-laki">laki-laki</option>
  <option velue="perempuan">Perempuan</option>
</select>

<br><br><br><br>

  <input type="submit" value="simpan Data">
</form>
</body>
</html>