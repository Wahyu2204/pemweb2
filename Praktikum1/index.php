<?php
  $title = 'Praktikum 1 PHP';
  $nama = 'Wahyu';
  $umur = 18;
  $hobi = 'Main Game';
  
  // echo 'Welcome ' . $nama . ' Dengan umur ' . $umur . ' Hobi saya ' . $hobi;

  define ('Phi' , 3.14);
  $jari = 8;

  $keliling = 2 * Phi * $jari;
  $luas =  Phi * $jari * $jari;

  // echo $keliling;
  // echo '<br>' . $luas;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> <?php echo $title ?> </h1>
  <p>Luas Lingkaran : <?php echo $luas ?> </p>
  <p>Keliling Lingkaran : <?php echo $keliling ?> </p>
</body>
</html>