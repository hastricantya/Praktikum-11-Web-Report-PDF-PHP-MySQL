<?php  
//koneksi ke database
include ('koneksi.php'); 
//manggil file dompdf
require_once("dompdf/autoload.inc.php"); 
use Dompdf\Dompdf;
$dompdf = new Dompdf();
//mengambil data dengan query
$query = mysqli_query($koneksi, "SELECT *FROM formdaftar"); 
//membuat tabel
$html = '<center><h3>Daftar Nama Siswa Baru</h3></center><br><br/><hr/><br>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Jenis Pendaftaran</th>
<th>Tanggal Masuk</th>
<th>NIS</th>
<th>Nomer Peserta</th>
<th>Pernah PAUD</th>
<th>Pernah TK</th>
<th>No. Seri SKHUN Sebelumnya</th>
<th>No. Seri Ijazah Sebelumnya</th>
<th>Hobi</th>
<th>Cita-cita</th>
<th>Nama Lengkap</th>
<th>Jenis Kelamin</th>
<th>NISN</th>
<th>NIK</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Agama</th>
<th>Berkebutuhan Khusus</th>
<th>Alamat Jalan</th>
<th>RT</th>
<th>RW</th>
<th>Nama Dusun</th>
<th>Nama Kelurahan/Desa</th>
<th>Kecamatan</th>
<th>Kode Pos</th>
<th>Tempat Tinggal</th>
<th>Moda Transportasi</th>
<th>No HP</th>
<th>No Telepon</th>
<th>E-mail Pribadi</th>
<th>Penerima KPS/KKS/PKH/KIP</th>
<th>No. KPS/KKS/PKH/KIP</th>
<th>Kewarganegaraan</th>
</tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) 
{
//isi tabel
$html .= "<tr>
<td>".$no."</td>
<td>".$row['jenispend']."</td>
<td>".$row['tglmsk']."</td>
<td>".$row['nis']."</td>
<td>".$row['nopeserta']."</td>
<td>".$row['paud']."</td>
<td>".$row['tk']."</td>
<td>".$row['seriskhun']."</td>
<td>".$row['seriijazah']."</td>
<td>".$row['hobi']."</td>
<td>".$row['cita']."</td>
<td>".$row['namalengkap']."</td>
<td>".$row['jkel']."</td>
<td>".$row['nisn']."</td>
<td>".$row['nik']."</td>
<td>".$row['tempatlahir']."</td>
<td>".$row['tgllahir']."</td>
<td>".$row['agama']."</td>
<td>".$row['abk']."</td>
<td>".$row['alamat']."</td>
<td>".$row['rt']."</td>
<td>".$row['rw']."</td>
<td>".$row['dusun']."</td>
<td>".$row['desa']."</td>
<td>".$row['kecamatan']."</td>
<td>".$row['kdpos']."</td>
<td>".$row['tempattinggal']."</td>
<td>".$row['transport']."</td>
<td>".$row['nohp']."</td>
<td>".$row['notelp']."</td>
<td>".$row['email']."</td>
<td>".$row['kps']."</td>
<td>".$row['nokps']."</td>
<td>".$row['kwn']."</td>
</tr>";
$no++;
}

$html .= "<html>";
$dompdf->loadhtml($html);
//Setting Ukuran dan Orientasi Kertas
$dompdf->setPaper('A1','landscape');
//Rendering dari HTML ke PDF
$dompdf->render();
//Melakukan Output File PDF
$dompdf->stream('Daftar Nama Siswa Baru.pdf');
?>