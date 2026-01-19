<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<h2>INPUT DATA MAHASISWA </h2>

<form action="proses_tambah_mahasiswa.php" METHOD = "POST">

  <label for="fNIM">NIM:</label><br>
  <input type="number" id="NIM" name="NIM" value=""><br>

  <label for="nama">nama:</label><br>
  <input type="text" id="nama" name="nama" value=""><br>

  <label for="alamat">Alamat:</label><br>
  <input type="text" id="alamat" name="alamat" value=""><br><br>

  <label for="nama">jenis kelamin:</label><br>
  <select id="jkl" name="jkl">
  <option velue="">pilih</option>
  <option velue="laki-laki">laki-laki</option>
  <option velue="perempuan">Perempuan</option>
</select>

<br><br><br><br>

  <input type="submit" value="Tambah Data">
</form>

<br>

<?php
include 'koneksi.php';
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>NIM</th><th>NAMA</th><th>ALAMAT</th><th>JENIS KELAMIN</th><th>Aksi</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["NIM"]. "</td>
        <td>" . $row["NAMA"]. "</td>
        <td>" . $row["ALAMAT"]. "</td>
        <td>" . $row["JKEL"]. "</td>
        <td> 
        <a href='edit.php?nim=".$row['NIM']."'> EDIT </a>|
        <a href='hapus.php?nim=".$row['NIM']."'> HAPUS </a> 
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<p>data ynag di masukan akan di kirim ke
    "proses_tambah_Mahasiswa.php"</p>
</body>
</html>