<?php
// require_once("page/laporan/fpdf/fpdf.php");
include 'fpdf/fpdf.php';
include '../../includes/koneksi.php';

//membuat objek
// $pdf = new FPDF('P', 'mm', 'A4');

// //membuat halaman baru
// $pdf->AddPage();
// $pdf->SetFont('Arial', 'B', 16);


// $pdf->Cell(190, 7, 'Laporan Parkir', 0, 1, 'C');

// // tampilkan file PDF pada browser
// $pdf->Output('I', 'laporan_parkir.pdf');

// hentikan proses
// exit;
// ambil input dari form filter
$startDate = $_GET['startDate'];
$endDate = $_GET['endDate'];

// query database untuk mengambil data laporan parkir
$query = "SELECT vehicles.merek, users.nama AS nama_users,employees.nama AS nama_satpam , users.alamat AS alamat_users, vehicles.foto_kendaraan, users.avatar, parkings.created_at FROM parkings INNER JOIN vehicles ON parkings.id_kendaraan = vehicles.id INNER JOIN users ON vehicles.id_user = users.id INNER JOIN employees ON parkings.id_karyawan = employees.id WHERE parkings.created_at BETWEEN '$startDate' AND '$endDate' ORDER BY parkings.id ASC";
$hasil = mysqli_query($koneksi, $query);
// $row = mysqli_fetch_array($hasil);
// var_dump($row);
// echo $hasil;
// membuat objek FPDF
$pdf = new FPDF('L', 'mm', 'A3');

// membuat halaman baru
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// judul
// $pdf->Cell(190, 7, 'Laporan Parkir', 0, 1, 'C');

// // header tabel
// $pdf->SetFont('Arial', 'B', 14);
// $pdf->Cell(10, 10, 'No', 1, 0);
// $pdf->Cell(30, 10, 'Merek', 1, 0);
// $pdf->Cell(30, 10, 'User', 1, 0);
// $pdf->Cell(50, 10, 'Alamat User', 1, 0);
// $pdf->Cell(30, 10, 'Satpam', 1, 0);
// $pdf->Cell(50, 10, 'Tanggal Parkir', 1, 0);
// $pdf->Cell(50, 10, 'Foto User', 1, 0);
// $pdf->Cell(60, 10, 'Foto Kendaraan', 1, 1);
// judul
$pdf->Cell(300, 7, 'Laporan Parkir', 0, 1, 'C');

// header tabel
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(10, 20, 'No', 1, 0);
$pdf->Cell(30, 20, 'Merek', 1, 0);
$pdf->Cell(30, 20, 'User', 1, 0);
$pdf->Cell(50, 20, 'Alamat User', 1, 0);
$pdf->Cell(30, 20, 'Satpam', 1, 0);
$pdf->Cell(50, 20, 'Tanggal Parkir', 1, 0);
$pdf->Cell(50, 20, 'Foto User', 1, 0);
$pdf->Cell(60, 20, 'Foto Kendaraan', 1, 1);

// isi tabel
$pdf->SetFont('Arial', '', 12);
// while ($row = mysqli_fetch_array($hasil)) {
//     $pdf->Cell(10, 7, $row['id'], 1, 0);
//     $pdf->Cell(30, 7, $row['merek'], 1, 0);
//     $pdf->Cell(30, 7, $row['nama_users'], 1, 0);
//     $pdf->Cell(30, 7, $row['nama_satpam'], 1, 0);
//     $pdf->Cell(50, 7, $row['foto_kendaraan'], 1, 0);
//     $pdf->Cell(50, 7, $row['foto_user'], 1, 0);
//     $pdf->Cell(30, 7, $row['created_at'], 1, 1);
//     // var_dump($row);
// }
// inisialisasi variabel counter dengan nilai 1
$counter = 1;

// looping data laporan parkir
while ($row = mysqli_fetch_array($hasil)) {
    // tampilkan nomor urut
    $pdf->Cell(10, 20, $counter, 1, 0);

    // tampilkan data lainnya
    // $pdf->Cell(30, 20, $row['merek'], 1, 0);
    // $pdf->Cell(30, 20, $row['nama_users'], 1, 0);
    // $pdf->Cell(50, 20, $row['alamat_users'], 1, 0);
    // $pdf->Cell(30, 20, $row['nama_satpam'], 1, 0);
    // $pdf->Cell(30, 20, $row['created_at'], 1, 1);
    // $pdf->Image('https://berserk.my.id/storage/' . $row['foto_kendaraan'], $pdf->GetX() + 60, $pdf->GetY() + 20, 20, 20);
    // $pdf->Image('https://berserk.my.id/storage/' . $row['avatar'], $pdf->GetX() + 60, $pdf->GetY() + 20, 20, 20);


    // // tambahkan nilai variabel counter
    // $counter++;
    // tampilkan data lainnya
    $pdf->Cell(40, 20, $row['merek'], 2, 0);
    $pdf->Cell(40, 20, $row['nama_users'], 2, 0);
    $pdf->Cell(50, 20, $row['alamat_users'], 2, 0);
    $pdf->Cell(40, 20, $row['nama_satpam'], 2, 0);
    $pdf->Cell(50, 20, $row['created_at'], 2, 1);

    $x = $pdf->GetX();
    $y = $pdf->GetY();
    // $pdf->Image('https://berserk.my.id/storage/' . $row['foto_kendaraan'], $x, $y, 20, 20);
    // $pdf->SetXY($x + 150, $y);
    // $pdf->Image('https://berserk.my.id/storage/' . $row['avatar'], $x + 50, $y, 20, 20);
    // $pdf->SetXY($x + 170, $y + 10);
    $pdf->Image('https://berserk.my.id/storage/' . $row['foto_kendaraan'], $x, $y, 20, 20);
    $pdf->SetXY($x + 50, $y);
    $pdf->Image('https://berserk.my.id/storage/' . $row['avatar'], $x + 50, $y, 20, 20);
    $pdf->SetXY($x + 100, $y + 20);
    // tambahkan nilai variabel counter
    $counter++;
}
// // tampilkan file PDF pada browser
// $pdf->Output('I', 'laporan_parkir.pdf');

// // hentikan proses
// exit;
// menambahkan urutan duplikat pada nama file PDF
$fileName = 'laporan_parkir';
$counter = 0;
while (file_exists($fileName . '.pdf')) {
    $counter++;
    $fileName = 'laporan_parkir_' . $counter;
}

// tampilkan file PDF pada browser
$pdf->Output('I', $fileName . '.pdf');

// hentikan proses
exit;
