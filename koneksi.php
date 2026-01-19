<?php
$servername = "localhost";
$username = "root";
$password = "";
$databest = "kampus";

// Create connection
$conn = new mysqli($servername, $username, $password, $databest);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "BERHASIL KONEKSI";
?>