<?php
include 'config/app.php';
include 'fpdf\fpdf.php';
$data_promo = select("SELECT * FROM dkpromo ORDER BY tempat ASC");


	error_reporting(0);

    $pdf = new FPDF('L','mm','Letter');
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0,7,'TABEL DATA PROMO',0,1,'C');
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial', 'B', 10);

    $pdf->Cell(10,6,'NO',1,0,'C');
    $pdf->Cell(60,6,'TEMPAT',1,0,'C');
    $pdf->Cell(60,6,'PROMO',1,0,'C');
    $pdf->Cell(40,6,'BATAS PROMO',1,0,'C');
    $pdf->Cell(40,6,'HARGA AWAL',1,0,'C');
    $pdf->Cell(40,6,'HARGA AKHIR',1,1,'C');
    $pdf->SetFont('Arial', '', 10);

    $nomor = 1;
    foreach($data_promo as $u)
    {

        $pdf->Cell(10,6,$nomor++,1,0,'C');
        $pdf->Cell(60,6,$u['tempat'],1,0,'C');
        $pdf->Cell(60,6,$u['promo'],1,0,'C');
        $pdf->Cell(40,6,$u['bataspromo'],1,0,'C');
        $pdf->Cell(40,6,$u['harga_awal'],1,0,'C');
        $pdf->Cell(40,6,$u['harga_akhir'],1,1,'C');
        $pdf->SetFont('Arial', '', 10);
    }
    

    $pdf->Output();
?>