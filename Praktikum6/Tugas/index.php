<?php

include 'koneksi.php';

// Show data
$query = "SELECT * FROM data_kendaraan";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Data Kendaraan</h2>
  <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No. Plat</th>
            <th>Merek</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td> <?= $row ['id'] ?> </td>
            <td> <?= $row ['nama'] ?> </td>
            <td> <?= $row ['noplat'] ?> </td>
            <td> <?= $row ['merek'] ?> </td>
        </tr>
        <?php endwhile; ?>
   
    </table>

    <br>
    <h2>Tambah Kendaraan</h2>
    <form action="insert.php" method="POST">
        Nama: <input type="text" name="nama" required><br>
        No. Plat: <input type="text" name="noplat" required><br>
        Merek: <input type="text" name="merek" required><br>
        <input type="submit" value="Tambah">
    </form>
    
</body>
</html>