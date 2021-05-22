<?php
require "koneksi.php";
$sql = "CREATE TABLE formdaftar (
jenispend varchar(15) NOT NULL,
tglmsk date NOT NULL,
nis varchar(10) NOT NULL,
nopeserta varchar(20) NOT NULL,
paud varchar (10) NOT NULL,
tk varchar (10) NOT NULL,
seriskhun varchar(16) NOT NULL,
seriijazah varchar(16) NOT NULL,
hobi varchar(20) NOT NULL,
cita varchar(20) NOT NULL,
namalengkap varchar(50) NOT NULL,
jkel varchar(10) NOT NULL,
nisn varchar(10) NOT NULL PRIMARY KEY,
nik varchar(16) NOT NULL,
tempatlahir varchar(30) NOT NULL,
tgllahir date NOT NULL,
agama varchar(10) NOT NULL,
abk varchar(20) NOT NULL,
alamat varchar(30) NOT NULL,
rt varchar(3) NOT NULL,
rw varchar(3) NOT NULL,
dusun varchar(30) NOT NULL,
desa varchar(30) NOT NULL,
kecamatan varchar(30) NOT NULL,
kdpos varchar(5) NOT NULL,
tempattinggal varchar(30) NOT NULL,
transport varchar(20) NOT NULL,
nohp varchar(20) NOT NULL,
notelp varchar(20) NOT NULL,
email varchar(30) NOT NULL,
kps varchar(10) NOT NULL,
nokps varchar(15) NOT NULL,
kwn varchar(20) NOT NULL)";
if (mysqli_query($koneksi, $sql)) {
	echo "Tabel Berhasil Dibuat";
} else {
	echo "Error: ". $sql . "<br>" . mysqli_error($koneksi); }
mysqli_close($koneksi);
?>