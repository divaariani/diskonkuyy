<?php

include 'config/app.php';

$id = (int)$_GET['id'];

if (delete_promo($id) > 0){
     echo "<script>
            alert('Data Promo Berhasil Dihapus');
            document.location.href = 'table.php';
          </script>";
} else{
    echo "<script>
            alert('Data Promo Gagal Dihapus');
            document.location.href = 'table.php';
          </script>";
}
