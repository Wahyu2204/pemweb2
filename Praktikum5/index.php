<?php

class Manusia {

  public $nama;
  public $umur;
  // protected
  // private $ktp;

  public function setNama ($nama)
  {

    $this->nama = $nama;

  }

  public function setUmur ($umur)
  {

    $this->umur = $umur;

  }

  public function getInfo ()
  {

    return "Nama : " . $this->nama . "</br> Umur : " . $this->umur;

  }

}

// Membuat Objek
$jawir = new Manusia ();
$jawir->setNama ("Jawa Ireng");
$jawir->setUmur (10);

echo $jawir->getInfo ();

echo '</br>';

$jawir = new Manusia ();
$jawir->setNama ("Jawa Ireng");
$jawir->setUmur (10);

echo $jawir->getInfo ();

?>