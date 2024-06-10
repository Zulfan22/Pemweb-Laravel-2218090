<?php
require('fpdf/fpdf.php');
include 'koneksi.php';

// Mengambil data dari tb_kategori
$sql = "SELECT * FROM tb_kategori";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: ". mysqli_error($conn));
}
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

mysqli_close($conn);

// Buat instance FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Atur font
$pdf->SetFont('Arial', 'B', 12);

// Judul tabel
if (count($data) > 0) {
    $header = array_keys($data[0]);
    foreach($header as $col) {
        $pdf->Cell(40, 10, $col, 1);
    }
    $pdf->Ln();

    // Isi tabel
    $pdf->SetFont('Arial', '', 12);
    foreach($data as $row) {
        foreach($row as $col) {
            $pdf->Cell(40, 10, $col, 1);
        }
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'Tidak ada data yang ditemukan', 1, 1, 'C');
}

// Output PDF ke browser
$pdf->Output('D', 'kategori_report.pdf'); // Menggunakan 'D' untuk mendownload file
?>
