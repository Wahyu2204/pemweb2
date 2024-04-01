<?php

include 'koneksi.php';

$nama = $_POST ['nama'];
$noplat = $_POST ['noplat'];
$merek = $_POST ['merek'];

$query = "INSERT INTO data_kendaraan (nama,noplat,merek)
          VALUES ('$nama','$noplat','$merek')";

if ($conn->query($query) === TRUE) {
  header ("Location: index.php");
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();