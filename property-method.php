<?php

class Siswa
{
    public $nama;
    public $kelas;
    public $umur;
    public $sekolah;

    public function __construct($nama = "nama", $kelas = "kelas", $umur = "umur", $sekolah = "sekolah")
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->umur = $umur;
        $this->sekolah = $sekolah;
    }

    function sapa()
    {
        return "Halo " . $this->nama . " Kamu Kelas " . $this->kelas;
    }
}
  

$siswa1 = new Siswa("Fawwaz", 11, 18, "HSI");

$siswa2 = new Siswa("Daffa", 12, 19, "HSI");


echo $siswa1->sapa();
echo "<br>";
echo "<br>";
echo $siswa2->sapa();
