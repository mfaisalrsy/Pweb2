<?php
//OOP (Object Oriented Programmer)
//class: template/blueprint (denah rumah)
//object: isi, rumah 

// self::
// this->
//__contructur

// Hak Akses:
// Public: XXX
// private:
// protected:

//Class
Class NilaiSiswa
{
    public $nama;
    public $nilai;
    public $matakuliah;


    public function getHasil() {
        if ($this->nilai > 55) return "LULUS";
        else return "TIDAK LULUS";
    }
}

//objek
$ns1 = new NilaiSiswa();
$ns1->nama = "Angga";
$ns1->nilai = 90;
$ns1->matakuliah = "PSO";

//cetak
echo "Nama Mahasiswa: $ns1->nama <br>";
echo "Nilai: $ns1->nilai <br>";
echo "Mata Kuliah:$ns1->matakuliah <br>";
echo "Status: " .$ns1-> getHasil() ;


?>