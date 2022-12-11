<?php

// fungsi menampilkan
function select($query)
{
    // psnggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// fungsi menambahkan
function create_promo($post)
{
    global $db;

    $tempat = $post['tempat'];
    $promo = $post['promo'];
    $bataspromo = $post['bataspromo'];
	$harga_awal = $post['harga_awal'];
	$harga_akhir = $post['harga_akhir'];

    //query tambah data promo
    $query = "INSERT INTO dkpromo VALUES(null, '$tempat', '$promo', '$bataspromo', '$harga_awal', '$harga_akhir')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi mengubah data promo
function update_promo($post)
{
    global $db;

    $id       = $post['id'];
	$tempat = $post['tempat'];
	$promo = $post['promo'];
    $bataspromo = $post['bataspromo'];
	$harga_awal = $post['harga_awal'];
	$harga_akhir = $post['harga_akhir'];

    //query ubah data
    $query = "UPDATE dkpromo SET tempat = '$tempat', promo = '$promo', bataspromo = '$bataspromo', harga_awal = '$harga_awal', harga_akhir = '$harga_akhir' WHERE id = '$id'";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menghapus data promo
function delete_promo($id)
{
    global $db;

    //query hapus data promo
    $query = "DELETE FROM dkpromo WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function open_pdf()
    {
		global $db;
		return $this->db->get('dkpromo');
		$this->load->view('pdf_v',$data);
    }
	
?>