<?php
// Array program studi
$ar_prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "TE" => "Teknik Elektro",
    "BD" => "Bisnis Digital"
];

// Array domisili
$ar_domisili = [
    "Jakarta" => "Jakarta",
    "Bogor" => "Bogor",
    "Depok" => "Depok",
    "Bekasi" => "Bekasi"
];

// Array skill web programming dengan nilai skor
$ar_skill_web_programming = [
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50
];

// Menangani data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $ar_prodi[$_POST['prodi']];
    $skills = isset($_POST['skills']) ? implode(", ", $_POST['skills']) : '';
    // Inisialisasi nilai total skor
    $total_skor = 0;
    // Menentukan nilai total skor berdasarkan skor setiap skill
    foreach ($_POST['skills'] as $skill) {
        if (isset($ar_skill_web_programming[$skill])) {
            $total_skor += $ar_skill_web_programming[$skill];
        }
    }
    // Menentukan kategori skill berdasarkan total skor
    if ($total_skor == 0) {
        $kategori_skill = "Tidak Memadai";
    } elseif ($total_skor <= 40) {
        $kategori_skill = "Kurang";
    } elseif ($total_skor <= 60) {
        $kategori_skill = "Cukup";
    } elseif ($total_skor <= 100) {
        $kategori_skill = "Baik";
    } else {
        $kategori_skill = "Sangat Baik";
    }
    $email = $_POST['email'];

    // Menampilkan data
    ?>
    <div class="container">
        <h2>Hasil Registrasi</h2>
        <p>NIM: <?= $nim ?></p>
        <p>Nama: <?= $nama ?></p>
        <p>Jenis Kelamin: <?= $gender ?></p>
        <p>Program Studi: <?= $prodi ?></p>
        <p>Skill: <?= $skills ?></p>
        <p>Skor Skill: <?= $total_skor ?></p>
        <p>Kategori Skill: <?= $kategori_skill ?></p>
        <p>Email: <?= $email ?></p>
    </div>
    <?php
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="#">
    <fieldset style="border: 1px solid #000; padding: 20px; margin: 20px auto; max-width: 1100px; background-color: whitesmoke;">
        <legend>Form Registrasi IT Club Data Science</legend>
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <input id="nim" name="nim" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="laki-laki" type="radio" class="custom-control-input" value="Laki-Laki">
                    <label for="laki-laki" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="perempuan" type="radio" class="custom-control-input" value="Perempuan">
                    <label for="perempuan" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label>
            <div class="col-8">
                <select id="prodi" name="prodi" class="custom-select">
                    <?php foreach ($ar_prodi as $kode => $nama): ?>
                        <option value="<?= $kode ?>"><?= $nama ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Web dan Programming</label> 
            <div class="col-8">
                <?php foreach ($ar_skill_web_programming as $skill => $skor): ?>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="checkbox_<?= $skill ?>" type="checkbox" class="custom-control-input" value="<?= $skill ?>"> 
                        <label for="checkbox_<?= $skill ?>" class="custom-control-label"><?= $skill ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Domisili</label>
            <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select">
                    <?php foreach ($ar_domisili as $kode => $nama): ?>
                        <option value="<?= $kode ?>"><?= $nama ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input id="email" name="email" type="email" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-8 offset-4">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
