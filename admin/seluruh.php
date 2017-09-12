<?php
include '../inc/koneksi.php';
require('../assets/pdf/fpdf.php');
$pdf = new FPDF("L","cm","A4");
$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('../assets/img/telkom.png',1,1,3,1.5); 
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(2);
$pdf->SetFont('Times','B',18);
$pdf->Cell(25.5,4,"Laporan Data Siswa/Mahasiswa PKL",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(4,0.7,"Di cetak pada : ".date("d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'NIM', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jenis Kelamin', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Asal', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Tempat PKL', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Telepon', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($con, "select * from user order by nama");
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no, 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['nama'], 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['nim'], 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['jenis_kelamin'], 1, 0, 'C');
	$pdf->Cell(4.5, 0.8,  $lihat['universitas'], 1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['tempatkp'], 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['telepon'], 1, 1, 'C');
	$no++;
}
$pdf->Output("data_siswa.pdf","I");
?>

