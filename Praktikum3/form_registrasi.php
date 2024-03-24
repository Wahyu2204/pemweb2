<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
  <div class="mx-auto p-5">
  <form method="GET" action="hasil_regis.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="program_studi" name="program_studi" class="custom-select">
        <option value="teknik informatika">Teknik Informatika</option>
        <option value="sistem informasi">Sistem Informasi</option>
        <option value="bisnis digital">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web & Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="checkbox_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="checkbox_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="checkbox_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_3" type="checkbox" class="custom-control-input" value="rwd bootstrap"> 
        <label for="checkbox_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="checkbox_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="checkbox_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="checkbox_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat_domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="tempat_domisili" name="tempat_domisili" class="custom-select">
        <option value="jakarta">Jakarta</option>
        <option value="bogor">Bogor</option>
        <option value="depok">Depok</option>
        <option value="tanggerang">Tanggerang</option>
        <option value="bekasi">Bekasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-at"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>
</div>

<?php 
$ar_prodi = ["TI" => "Teknik Informatika", "SI" => "Sistem Informasi", "BD" => "Bisnis Digital"];
$ar_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
$ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi"];
?>

Program Studi :
<select name="prodi">
  <?php 
  foreach ($ar_prodi as $k => $v) {
    echo '<option value = "'.$k.'">'.$v.'</option>';
  }
?>
</select>

Skil Web & Programing
<?php 
foreach ($ar_skill as $k => $v) {
  echo '<input type = "checkbox" name = "skills[]" value="'.$k.'">'.$k;
}
?>