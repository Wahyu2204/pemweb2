<?php 
$nim = $_GET['nim'];
$nama_lengkap = $_GET['nama_lengkap'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$program_studi = $_GET['program_studi'];
$skill = $_GET['skill'];
$domisili = $_GET['tempat_domisili'];
$email = $_GET['email'];

echo "NIM: $nim <br>";
echo 'Nama Lengkap : ' . $nama_lengkap .'<br>';
echo 'Jenis Kelamin : ' . $jenis_kelamin .'<br>';
echo 'Program Studi : ' . $program_studi .'<br>';
echo 'Skill : ' . $skill .'<br>';
echo 'Skor Skill : ' . $skor_skill .'<br>';
echo 'Kategori Skill : ' . $kategori_skill .'<br>';
echo 'Domisili : ' . $domisili .'<br>';
echo 'Email : ' . $email;
?>