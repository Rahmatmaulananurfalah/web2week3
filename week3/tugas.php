<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h4 style="text-align : center">Form Registrasi Asdos</h4>
    <div class="container">
    <form method="POST" action="hasil.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukkan NIM anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="P"> 
        <label for="jk_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="L"> 
        <label for="jk_1" class="custom-control-label">Laki-Laki</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Prodi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="js"> 
        <label for="skill[]_2" class="custom-control-label">JAVASCRIPT</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="rwd"> 
        <label for="skill[]_3" class="custom-control-label">RWD</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_5" class="custom-control-label">JAVA</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="phyton"> 
        <label for="skill[]_6" class="custom-control-label">PHYTON</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="jakarta">Jakarta</option>
        <option value="depok">Depok</option>
        <option value="bima">Bima</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>

</body>
</html>
[9/3 21.11] Imanudin 07: <?php
//menangkap value form berdasarkan unique name & simpan kedalam varible
$nim = $_POST['nim']; 
$nama = $_POST['nama']; 
$jk = $_POST['jk']; 
$prodi = $_POST['prodi']; 
$skill = $_POST['skill']; 
$domisili = $_POST['domisili']; 
$email = $_POST['email']; 

$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
            $nilai += 10;
            break;
        case 'css':
            $nilai += 10;
            break;
        case 'javascript':
            $nilai += 20;
            break;
        case 'rwd':
            $nilai += 20;
            break;
        case 'php':
            $nilai += 30;
            break;
        case 'java':
            $nilai += 30;
            break;
        case 'phyton':
            $nilai += 50;
            break;
        default:
            # code...
            break;
    }
}

echo "<h4>Informasi Yang Dikirim</h4>";
echo "<table border='1'>";
echo "<tr><td>NIM</td><td>$nim</td></tr>";
echo "<tr><td>Nama</td><td>$nama</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>$jk</td></tr>";
echo "<tr><td>Program Studi</td><td>$prodi</td></tr>";
echo "<tr><td>Skill</td><td>" . implode(", ", $skill) . "</td></tr>";
echo "<tr><td>Domisili</td><td>$domisili</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Nilai skill</td><td>$nilai</td></tr>";
echo "<tr><td>Keterangan</td><td>";
if ($nilai == 0) {
    echo "Tidak memadai";
} elseif ($nilai <= 40) {
    echo "Kurang";
} elseif ($nilai <= 60) {
    echo "Cukup";
} elseif ($nilai <= 100) {
    echo "Baik";
} elseif ($nilai <= 150) {
    echo "Sangat baik";
}
echo "</td></tr>";
echo "</table>";