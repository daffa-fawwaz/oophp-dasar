<?php

class Siswa
{
    public $nama;
    public $kelas;
    public $umur;
    public $sekolah;
    public $beasiswa;
    public $noBeasiswa;

    public function __construct($nama = "nama", $kelas = "kelas", $umur = "umur", $sekolah = "sekolah", $beasiswa, $noBeasiswa)
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->umur = $umur;
        $this->sekolah = $sekolah;
        $this->beasiswa = $beasiswa;
        $this->noBeasiswa = $noBeasiswa;
    }

    function sapa()
    {
        return "Halo " . $this->nama . " Kamu Kelas " . $this->kelas;
    }
}

class TampilkanInfoSiswa
{
    public function siswa(Siswa $siswa)
    {
        $str = "Nama : " . $siswa->nama . "<br>" . " Kelas : " . $siswa->kelas . "<br>" . "Umur : " . $siswa->umur . "<br>" . "Sekolah : " . $siswa->sekolah;

        return $str;
    }
}

class Beasiswa extends Siswa
{
    public function infoLengkap()
    {
        $str = $this->nama . "<br>" .
            "Kelas : " . $this->kelas . "<br>" .
            "Umur : " . $this->umur . "<br>" .
            "Sekolah : " . $this->sekolah . "<br>" .
            "Beasiswa : " . $this->beasiswa = "Iya" . "<br>" .
            "Dengan Nomor : " . $this->noBeasiswa;

        return $str;
    }
}

class NoBeasiswa extends Siswa
{
    public function infoLengkap()
    {
        $str = $this->nama . "<br>" .
            "Kelas : " . $this->kelas . "<br>" .
            "Umur : " . $this->umur . "<br>" .
            "Sekolah : " . $this->sekolah . "<br>" .
            "Beasiswa : " . $this->beasiswa = "Tidak" . "<br>";

        return $str;
    }
}


$siswa1 = new Beasiswa("Fawwaz", 11, 18, "HSI", true, 11100);
$siswa2 = new NoBeasiswa("Daffa", 12, 19, "HSI", false, 0);
$siswa3 = new Beasiswa("Daffa Fawwaz", 10, 15, "HSI - IDN", true, 12011);
$siswa4 = new NoBeasiswa("Fawwazy", 9, 11, "HSI - IDN", false, 0);

$infoSiswa1 = new TampilkanInfoSiswa();
$infoSiswa2 = new TampilkanInfoSiswa();
$infoSiswa3 = new TampilkanInfoSiswa();



echo $siswa1->infoLengkap();
echo "<br>";
echo "<br>";
echo $siswa2->infoLengkap();
echo "<br>";
echo "<br>";
echo $siswa3->infoLengkap();
echo "<br>";
echo "<br>";
echo $siswa4->infoLengkap();
echo "<br>";
echo "<br>";
echo $infoSiswa1->siswa($siswa1);
echo "<br>";
echo "<br>";
echo $infoSiswa2->siswa($siswa2);
echo "<br>";
echo "<br>";
echo $infoSiswa3->siswa($siswa3);

class Transportation
{
    public $name;
    public $brand;
    public $jumlah_pintu;
    public $sizeJok;
    public $ketinggian;

    public function __construct($name, $brand, $jumlah_pintu, $sizeJok, $ketinggian)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->jumlah_pintu = $jumlah_pintu;
        $this->sizeJok = $sizeJok;
        $this->ketinggian = $ketinggian;
    }

    public function stop()
    {
        return "Transportasi " . $this->name . " Telah berhenti";
    }
}

class Car extends Transportation
{
    public function run()
    {
        $str = "Mobil dengan nama " . $this->name . " merk " . $this->brand . " telah berjalan " . " dan memiliki pintu " . $this->jumlah_pintu;
        return $str;
    }
}

class Motor extends Transportation
{
    public function run()
    {
        $str = "Motor dengan nama " . $this->name . " merk " . $this->brand . " telah berjalan " . " dan memiliki size jok " . $this->sizeJok;

        return $str;
    }
}

class Plane extends Transportation
{
    public function run()
    {
        $str = "Pesawat dengan type " . $this->name . " dari Maskapai " . $this->brand . " telah Terbang " . " dengan ketinggian " . $this->ketinggian . " Kaki";

        return $str;
    }
}

$motor = new Motor("Supra", "Honda", 0, "30cm", 0);
$mobil = new Car("Ayla", "Honda", 4, "", 0);
$pesawat = new Plane("Boeing 777", "Garuda", 0, "", 7000);

echo "<br>";
echo "<br>";
echo $motor->run();
echo "<br>";
echo $mobil->run();
echo "<br>";
echo $pesawat->run();
echo "<br>";
echo $pesawat->stop();
