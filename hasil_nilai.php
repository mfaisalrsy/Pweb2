<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];


//buat total nilai
//nilai uts + uas + tugas / 3
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

//Buat Perhitungan IF untuk Mencari Grade
if ($total_nilai >=85){
    $grade = 'A';
}
elseif ($total_nilai >=70){
    $grade = 'B';
}
elseif ($total_nilai >=56){
    $grade = 'C';
}
elseif ($total_nilai >=30){
    $grade = 'D';
}
else {
    $grade = 'E';
}

//Buat Perhitungan SWITHCASE Untuk Mencari Predikat
switch ($grade) {
    case "A":
        $predikat = "Sangat Memuaskan";
        break;

    case "B":
        $predikat = "Memuaskan";
        break;
    
    case "C":
        $predikat = "Cukup";
        break;

    default:
    $predikat = "Tidak Ada";
        
}

//Buat Perhitungan IF untuk Mencari Status LULUS/GAGAL
if ($total_nilai >=70){
    $status = "LULUS";
}
else {
    $status = "GAGAL";
}

//cetak hasil
echo 'Nama: '. $nama . '<br>';
echo 'Mata Kuliah: '. $matkul .'<br>';
echo 'Nilai UTS: '. $nilai_uts. '<br>';
echo 'Nilai UAS: '. $nilai_uas. '<br>';
echo 'Nilai Tugas: '. $nilai_tugas. '<br>';
echo 'Total Nilai: '. $total_nilai. '<br>';
echo 'Grade: '. $total_nilai. '<br>';
echo 'Predikat: '. $predikat. '<br>';
echo 'Status: '. $status. '<br>';
?>