<?php
// Menampilkan value form berdasarkan unique name & simpan ke dalam variable
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

// Tampilan value ke dalam web browser
echo "<h4>Informasi Yang Dikirim : </h4>";
echo "NIM : $nim ";
echo "<br>Nama : $nama ";
echo "<br>Jenis Kelmain : $jk ";
echo "<br>Program Studi : $prodi ";
echo "<br>Skill : ";
foreach ($skill as $data) {
    echo $data .",";
}
echo "<br>Domisili : $domisili ";
echo "<br>Email : $email ";
?>