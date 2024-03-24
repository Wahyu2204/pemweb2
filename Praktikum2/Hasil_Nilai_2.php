<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
 <h1>Form Nilai Siswa</h1>

 <form method="GET" action="#">
   <div class="form-group row">
     <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
     <div class="col-8">
       <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
     </div>
   </div>
   <div class="form-group row">
     <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
     <div class="col-8">
       <select id="matkul" name="matkul" class="custom-select">
         <option value="ddp">DDP</option>
         <option value="basdat">Basis Data</option>
         <option value="jarkom">Jaringan Komputer</option>
       </select>
     </div>
   </div>
   <div class="form-group row">
     <label for="nilai_uts" class="col-4 col-form-label">NIlai UTS</label> 
     <div class="col-8">
       <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
     </div>
   </div>
   <div class="form-group row">
     <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
     <div class="col-8">
       <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
     </div>
   </div>
   <div class="form-group row">
     <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
     <div class="col-8">
       <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
     </div>
   </div> 
   <div class="form-group row">
     <div class="offset-4 col-8">
       <button name="submit" type="submit" class="btn btn-primary">Submit</button>
     </div>
   </div>
 </form>
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
</div>