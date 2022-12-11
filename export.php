<?php
require './assets/vendor/autoload.php';
include 'config/app.php';

$dkpromo = select("SELECT * FROM dkpromo");


$spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$column_header=["id","tempat","promo","bataspromo","harga_awal","harga_akhir"];
$column=1;
foreach($column_header as $x_value) 
{
    $sheet->setCellValueByColumnAndRow($column,1,$x_value);
    $column++;
}

$i = 2;
foreach($dkpromo as $u)
{
    echo "<br>";
    $sheet->setCellValueByColumnAndRow(1,$i,$u['id']);
    $sheet->setCellValueByColumnAndRow(2,$i,$u['tempat']);
    $sheet->setCellValueByColumnAndRow(3,$i,$u['promo']);
    $sheet->setCellValueByColumnAndRow(4,$i,$u['bataspromo']);
    $sheet->setCellValueByColumnAndRow(5,$i,$u['harga_awal']);
    $sheet->setCellValueByColumnAndRow(6,$i,$u['harga_akhir']);
    $i++; 
}


// Write an .xlsx file
$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

// Save .xlsx file to the files directory
$writer->save('./assets/hasil export/datapromo.xlsx');

echo "<script>
            alert('Data Promo Berhasil Diexport');
            document.location.href = 'table.php';
          </script>";
?>
