<?php
require 'vendor/autoload.php';
include 'config/app.php';

if(isset($_POST['submit'])){
    $err ="";
    $ekstensi="";
    $success="";

    $file_name = $_FILES['filexls']['name'];
    $file_data = $_FILES['filexls']['tmp_name'];

    if(empty($file_name)){
        $err .="<li>silakan</li>";
    }else{
        $ekstensi = pathinfo($file_name)['extension'];

    }

    $ekstensi_allowed = array("xls", "xlsx");
    if(!in_array($ekstensi, $ekstensi_allowed)){
        $err .="<li>SILAHKAN BENER</li>";
    }

    if(empty($err)){
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
        $spreadsheet = $reader->load($file_data);
        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        $jumlahData = 0;
        for($i=1;$i<count ($sheetData);$i++){
			$tempat = $sheetData[$i]['0'];
            $promo = $sheetData[$i]['1'];
            $bataspromo = $sheetData[$i]['2'];
            $harga_awal = $sheetData[$i]['3'];
            $harga_akhir = $sheetData[$i]['4'];
            
            $sql1 = "insert into dkpromo(tempat, promo, bataspromo, harga_awal, harga_akhir) value('$tempat', '$promo', '$bataspromo', '$harga_awal', '$harga_akhir')";

            mysqli_query($db, $sql1);
            $jumlahData++;
        }

        if($jumlahData > 0){
            $success = "$jumlahData berhasil dimasukkan ke database";
        }
    }

    if($err){
        ?>
        <div class="alert alert-danger">
            <ul><?php echo $err ?></ul>
        </div>
        <?php    
    }

    if($success){
        echo "<script>
            alert('Data Promo Berhasil Diimport');
            document.location.href = 'table.php';
          </script>";
    } 
}
?>