<?php
// memanggil file koneksi.php agar file report terkoneksi dengan database
include('koneksi.php');
// memasukkan dompdf/autoload.inc.php untuk menjalankan perintah
require_once("dompdf/autoload.inc.php");
// menggunakan namespace dompdf
use Dompdf\Dompdf;
// membuat object dompdf dengan class dompdf
$dompdf = new Dompdf();
// menuliskan perintah query untuk mendapatkan data di tabel tb_siswa dan hasilnya disimpan kedalam variabel $query
$query = mysqli_query($koneksi,"select * from tb_siswa");
// membuat variabel html yang berisi kode html untuk membuat judul tabel dan header tabel untuk diconvert ke bentuk pdf
$html .= '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/><br/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Kelas</th>
 <th>Alamat</th>
 </tr>';
 // Untuk memberi nomor urut tiap data di tabel tb_siswa
$no = 1;
// extract variabel $query yang akan disimpan di variabel row dan data akan digabung di variabel html dengan mysqli_fetch_array
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['kelas']."</td>
 <td>".$row['alamat']."</td>
 </tr>";
 $no++;
}
// memberi tutup html dengan string variabel html
$html .= "</html>";
// konversi kode html pada variabel html menjadi bentuk pdf
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_siswa.pdf');
?>

