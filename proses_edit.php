<?php
include 'koneksi.php';

$nim=$_POST['NIM'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jkl=$_POST['jkl'];

$sql="UPDATE mahasiswa SET NAMA='$nama', ALAMAT='$alamat', JKEL='$jkl' WHERE NIM = '$nim' ";

if ($conn->query($sql) === TRUE) {
    header('location:form.php');
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();

?>