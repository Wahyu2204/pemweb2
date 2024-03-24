<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

// Total
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
$grade;
$predikat;

// Buat Perhitungan IF untuk Mencari Grade
if ($total_nilai >= 85) {
  $grade = 'A';
}

else if ($total_nilai >= 70) {
  $grade = 'B';
}

else if ($total_nilai >= 50) {
  $grade = 'C';
}

else if ($total_nilai >= 36) {
  $grade = 'D';
}

else {
  $grade = 'E';
}

// Buat Oerhitungan SWITCH Untuk Mencari Predikat
switch ($grade) {
  case 'A';
    $predikat = 'Sangat Memuaskan';
    break;
  
  case 'B';
    $predikat = 'Memuaskan';
    break;
  
  case 'C';
    $predikat = 'Cukup';
    break;
  
  case 'D';
    $predikat = 'Kurang';
    break;

  case 'E';
    $predikat = 'Sangat Kurang';
    break;

  default:
  $predikat = 'Tidak Ada';
  break;
}

// Buat Perhitungan IF Untuk Mencari Status Lulus atau Tidak Lulus
if ($total_nilai >= 70) {
  $status = 'Lulus';
}
else {
  $status = 'Tidak Lulus';
} 

// Cetak Hasil:
echo "Nama: $nama <br>"; 
echo 'Mata Kuliah : ' . $matkul .'<br>'; 
echo 'Nilai UTS : ' . $nilai_uts .'<br>'; 
echo 'Nilai UAS : ' . $nilai_uas .'<br>'; 
echo 'Nilai Tugas : ' . $nilai_tugas .'<br>';
echo 'Grade : ' . $grade .'<br>';
echo 'Predikat : ' . $predikat .'<br>';
echo 'Status : ' . $status;

?>